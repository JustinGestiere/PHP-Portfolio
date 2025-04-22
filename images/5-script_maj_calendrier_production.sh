DATE=$( date +%Y );
FILE=/home/User_VIP/script/maj_calendrier_dollaru/liste_machine_probleme_calendrier_PRODUCTION_$DATE.txt
cat $FILE | while read LINE ; do
	SOCIETE=$( echo $LINE | cut -d '/' -f 3 );
	SERVEUR=$( echo $SOCIETE | cut -d '_' -f 2 );
	echo $SERVEUR && ssh -i /home/User_VIP/.ssh/id_rsa.nokey ${SERVEUR} -- sudo su - User_DollarU -c '/liv/*/universe/com/script/update_calendar.ksh SOC_PRODUCTION *';
done