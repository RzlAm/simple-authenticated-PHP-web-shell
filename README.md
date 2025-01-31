# Simple Authenticated PHP Webshell

This PHP file allows executing system commands securely via a web interface, after verifying the user's password. The script uses the `system()` function to run commands only if the provided password is correct.

## Key Features

- **Password Verification**: The script checks the provided password before executing any command. The default password is hashed as `$2y$10$H8JfZc/NSMKb0Yu73SuEKeenCDVqjyjd720Yw4fgO0Dg5i7Z7oq1y`, which corresponds to the password "p@ssw0rd" hashed using the `PASSWORD_DEFAULT` algorithm.

- **System Command Execution**: Once the password is verified, the script runs the system command passed through the `cmd` parameter and outputs the result on the web page.

## How to Use

1. **Set Up a Web Server**:
   - Ensure you have a running PHP server (e.g., XAMPP, WAMP, or any local PHP setup).
   - Place the PHP file in a directory accessible by the web server.

2. **Access the PHP File**:
   - Navigate to the following URL in your browser:
     ```
     http://localhost/path/to/your/file.php?pwd=your_password&cmd=your_command
     ```
   - Replace `your_password` with the correct password (`p@ssw0rd`), and `your_command` with the command you want to run (e.g., `ls` for Linux or `dir` for Windows).

3. **Example Usage**:
   - For executing the `ls` command on Linux, the URL would look like this:
     ```
     http://localhost/path/to/your/file.php?pwd=p@ssw0rd&cmd=ls
     ```
   - This will list the files and directories of the current directory where the script is hosted.

## Changing the Password

To change the password used in this script:

1. **Generate a New Password Hash**:
   - Use the following PHP command to generate a new password hash:
     ```php
     echo password_hash("your_new_password", PASSWORD_DEFAULT);
     ```

2. **Update the PHP File**:
   - Replace the old hash in the PHP file with the new hash you generated:
     ```php
     $password = '$2y$10$yournewhashedpassword';
     ```

3. **Save and Test**:
   - Save the PHP file after updating the password, and test the new password functionality.


## Disclaimer

- Use this script at your own risk. The author is not responsible for any damage or consequences resulting from its use.
  
- **Warning**: This script is potentially dangerous if used without proper security measures.
