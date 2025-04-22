for SERVEUR in `cat /home/User_VIP/script/maj_calendrier_dollaru/liste_serveur.txt`; 
do 
	echo $SERVEUR && ssh -i /home/User_VIP/.ssh/id_rsa.nokey ${SERVEUR} -- rm -f /tmp/script_verif_calendrier.sh
	echo $SERVEUR && ssh -i /home/User_VIP/.ssh/id_rsa.nokey ${SERVEUR} -- rm -f /tmp/result_toutes_regles.txt
	echo $SERVEUR && ssh -i /home/User_VIP/.ssh/id_rsa.nokey ${SERVEUR} -- rm -f /tmp/result_toutes_regles_tries.txt
	echo $SERVEUR && ssh -i /home/User_VIP/.ssh/id_rsa.nokey ${SERVEUR} -- rm -f /tmp/result_sans_doublons.txt
	echo $SERVEUR && ssh -i /home/User_VIP/.ssh/id_rsa.nokey ${SERVEUR} -- rm -f /tmp/script_compare_regles.txt
done