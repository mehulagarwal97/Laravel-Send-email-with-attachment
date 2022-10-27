## Setup env file
1. Create a copy of .env_example file and rename as .env
2. Enter value for MAIL_USERNAME (enter complete email abc@gmail.com)
3. Enter value for MAIL_PASSWORD (enter google app password)
4. Enter value for MAIL_SENDER_NAME (enter your name)

## Run server
`php artisan serve`

## Result
* Home screen shows a form with fields for name, email and file attachment
* On submitting the form, an email is send to the entered email address. In the email the file is sent as an attachment.