# echo "Source Pass"
mysqldump -u root -proot medspaus >  dump.sql
echo "Destination Pass"
mysql -h  -u root -p medspaus < dump.sql
rm dump.sql
