# RESET ROOT PASSWORD

## Restart your system.
As soon as the system starts booting, press and hold the Shift key (BIOS systems) or Esc key (UEFI systems) to bring up the GRUB menu. <br>

Find the line that starts with <br>

  linux /boot/vmlinuz-... <br>
  
REPLACE 'ro quiet splash' WITH rw init=/bin/bash <br>

This makes the system boot into a root shell with read/write access. <br>


## Reset the Password

passwd root <br>
or  <br>
passwd user_name <br>

## RESTART your system
reboot -f
