# File Transfer Protocol

Package Name: vsftpd

<i> Before installing any package it's a good practice to keep updated your repository using the command: yum update</i> <br>

## Installation Command:
  
  sudo yum install vsftpd <br>
  or <br>
  sudo yum install vsftpd <br>

## Config Changes:
  /etc/vsftpd/vsftpd.conf <br>

  <b>possible options to change: </b> <br>
  anonymous_enable=NO <br>
  use_localtime=YES <br>
  ascii_upload_enable=YES <br> 
  ascii_download_enable=YES <br>
    -- <i>Above two options means converting from \n (Unix-style newlines) to \r\n (Windows-style newlines), depending on the platform.</i>

## File Upload to Server:

  To upload files we need ftp package installed which is by default installed if not install it with <b>yum install ftp</b> <br>

  if its installed successfully then by running ftp command it will go in ftp mode after using correct username and password. <br>

  <b>Single File Upload: </b> <br>
    put filename <br>
    
  <b>Multiple File Upload: </b> <br>
    put filename1 filename2 <br>

## File Upload to Server:

  get filename

