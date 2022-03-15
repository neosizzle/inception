#copy config
mv vsftpd.conf /etc/vsftpd.conf

#create user and change password
useradd -m $FTP_USR
echo -e "$FTP_PWD\n$FTP_PWD" | passwd $FTP_USR

mkdir -p /var/run/vsftpd
mkdir -p /var/run/vsftpd/empty

#give permissions to access static volume
chown -R $FTP_USR:$FTP_USR static/

#add user to userlist
echo $FTP_USR | tee -a /etc/vsftpd.userlist

#start vsftpd
/usr/sbin/vsftpd
