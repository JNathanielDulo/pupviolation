
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>PUPviolation Email Notification</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <style type="text/css">
    a[x-apple-data-detectors] {color: inherit !important;}
  </style>

</head>
<body style="margin: 0; padding: 0;">
  <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
      <td style="padding: 20px 0 30px 0;">

<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;">
  <tr>
    <td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0;">
      <img src="http://pupviolation.online/adminlte/dist/img/pup%20logo.png" alt="Creating Email Magic." width="300" height="230" style="display: block;" />
    </td>
  </tr>
  <tr>
    <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
        <tr>
          <td style="color: #153643; font-family: Arial, sans-serif;">
            <h1 style="font-size: 24px; margin: 0;">Email Notification</h1>
          </td>
        </tr>
        <tr>
          <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
            <p style="margin: 0;">This email is informing or notify that you commit a violation from the school premises and regulations based on the student Handbook.</p>
            
          </td>
        </tr>
        <tr>
          <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
            <p style="margin: 0;">
            <ul>
                <li>Student number: {{$details['studentNumber']}}</li>
                <li>Name: {{$details['name']}}</li>
                <li>Violation Title: {{$details['violationTitle']}}</li>
                <li>Date: {{$details['date']}}</li>
                <li>filed by: {{$details['filedby']}}</li>
            </ul>
            </p>
          </td>
        </tr>
        <tr>
            <p style="margin:0;">Mary Rose Palmares Cruz</p>
            <p style="margin:0;">Head of student services</p>
        </tr>   
      </table>
    </td>
  </tr>
  <tr>
    <td bgcolor="#ee4c50" style="padding: 30px 30px;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
        <tr>
          <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;">
            <p style="margin: 0;">&reg; pupviolation.online<br/>
           
          </td>
          
        </tr>
      </table>
    </td>
  </tr>
</table>

      </td>
    </tr>
  </table>
</body>
</html>
