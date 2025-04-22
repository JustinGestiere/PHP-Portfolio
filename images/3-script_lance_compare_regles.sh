DATE=$( date +%Y );
FILE=/home/User_VIP/script/maj_calendrier_dollaru/liste_machine_probleme_calendrier_PRODUCTION_$DATE.txt
cat $FILE | while read LINE ; do
	SOCIETE=$( echo $LINE | cut -d '/' -f 3 );
	SERVEUR=$( echo $SOCIETE | cut -d '_' -f 2 );
	scp -i /home/User_VIP/.ssh/id_rsa.nokey /home/User_VIP/script/maj_calendrier_dollaru/script_compare_regles.sh $SERVEUR:/tmp;
	echo $SERVEUR && ssh -i /home/User_VIP/.ssh/id_rsa.nokey ${SERVEUR} -- sudo su - User_DollarU -c "/tmp/script_compare_regles.sh";
done

wait

tar -czf /home/User_VIP/script/maj_calendrier_dollaru/RESULTATS_REGLES.tar.gz -C /home/User_VIP/script/maj_calendrier_dollaru/ RESULTATS_REGLES
MSG="Vous trouverez ci-joint les fichiers comprenant les retours de chaque serveur après le lancement du script."
echo "$MSG" | mailx -s "Calendrier $U - résultat du script regles" -a "/home/User_VIP/script/maj_calendrier_dollaru/RESULTATS_REGLES.tar.gz" justin.gestiere@*.fr