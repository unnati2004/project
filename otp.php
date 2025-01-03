<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $action = $data['action'];

    if ($action === 'send_otp') {
        $email = $data['email'];

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['success' => false, 'message' => 'Invalid email format.']);
            exit;
        }

        // Generate OTP
        $otp = rand(100000, 999999);
        $_SESSION['otp'] = $otp;
        $_SESSION['email'] = $email;

        // Simulate OTP being sent to email
        file_put_contents('otp_log.txt', "Generated OTP for $email: $otp\n", FILE_APPEND);

        echo json_encode(['success' => true, 'message' => 'OTP sent to email!']);
    } elseif ($action === 'verify_otp') {
        $userOtp = $data['otp'];

        if (!isset($_SESSION['otp'])) {
            echo json_encode(['success' => false, 'message' => 'OTP not generated.']);
            exit;
        }

        if ($_SESSION['otp'] == $userOtp) {
            unset($_SESSION['otp']); // Clear OTP after verification
            $_SESSION['otp_verified'] = true; // Mark OTP as verified
            echo json_encode(['success' => true, 'message' => 'OTP verified successfully.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid OTP.']);
        }
    } elseif ($action === 'reset_password') {
        if (!isset($_SESSION['otp_verified']) || !$_SESSION['otp_verified']) {
            echo json_encode(['success' => false, 'message' => 'OTP verification required.']);
            exit;
        }

        $newPassword = $data['newPassword'];

        if (strlen($newPassword) < 6) {
            echo json_encode(['success' => false, 'message' => 'Password must be at least 6 characters long.']);
            exit;
        }

        // Simulate saving the new password (hashed)
        $email = $_SESSION['email'];
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        file_put_contents('password_log.txt', "New password for $email: $hashedPassword\n", FILE_APPEND);

        session_destroy(); // Clear session after password reset
        echo json_encode(['success' => true, 'message' => 'Password reset successfully.']);
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
        }
        .container {
            border: 1px solid #000;
            padding: 20px;
            width: 300px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            margin-top: 10px;
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        p.error-message {
            color: red;
            font-size: 0.9em;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Forgot Password</h3>

        <!-- Email Section -->
        <div class="form-group" id="emailSection">
            <label for="email">Enter Email:</label>
            <input type="text" id="email" placeholder="Enter your email">
            <button id="sendOtp">Send OTP</button>
            <p class="error-message" id="emailError"></p>
        </div>

        <!-- OTP Section -->
        <div class="form-group" id="otpSection" style="display: none;">
            <label for="otp">Enter OTP:</label>
            <input type="text" id="otp" placeholder="Enter OTP">
            <button id="verifyOtp">Verify OTP</button>
            <p class="error-message" id="otpError"></p>
        </div>

        <!-- Reset Password Section -->
        <div class="form-group" id="resetPasswordSection" style="display: none;">
            <label for="newPassword">Enter New Password:</label>
            <input type="password" id="newPassword" placeholder="Enter new password">
            <button id="resetPassword">Reset Password</button>
            <p class="error-message" id="passwordError"></p>
        </div>
    </div>

    <script>
        const sendOtpButton = document.getElementById('sendOtp');
        const verifyOtpButton = document.getElementById('verifyOtp');
        const resetPasswordButton = document.getElementById('resetPassword');

        const emailSection = document.getElementById('emailSection');
        const otpSection = document.getElementById('otpSection');
        const resetPasswordSection = document.getElementById('resetPasswordSection');

        const emailError = document.getElementById('emailError');
        const otpError = document.getElementById('otpError');
        const passwordError = document.getElementById('passwordError');

        sendOtpButton.addEventListener('click', () => {
            const email = document.getElementById('email').value;
            emailError.textContent = '';
            if (!email) {
                emailError.textContent = 'Please enter your email';
                return;
            }

            fetch('', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ action: 'send_otp', email: email }),
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                        otpSection.style.display = 'block';
                        emailSection.style.display = 'none';
                    } else {
                        emailError.textContent = data.message;
                    }
                });
        });

        verifyOtpButton.addEventListener('click', () => {
            const otp = document.getElementById('otp').value;
            otpError.textContent = '';
            if (!otp) {
                otpError.textContent = 'Please enter the OTP';
                return;
            }

            fetch('', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ action: 'verify_otp', otp: otp }),
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                        resetPasswordSection.style.display = 'block';
                        otpSection.style.display = 'none';
                    } else {
                        otpError.textContent = data.message;
                    }
                });
        });

        resetPasswordButton.addEventListener('click', () => {
            const newPassword = document.getElementById('newPassword').value;
            passwordError.textContent = '';
            if (!newPassword) {
                passwordError.textContent = 'Please enter a new password';
                return;
            }

            fetch('', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ action: 'reset_password', newPassword: newPassword }),
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                        window.location.reload();
                    } else {
                        passwordError.textContent = data.message;
                    }
                });
        });
    </script>
</body>
</html>
