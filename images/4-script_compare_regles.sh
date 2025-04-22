#creation des fichiers utiles pour la suite
touch /tmp/result_toutes_regles.txt
touch /tmp/result_toutes_regles_tries.txt
touch /tmp/result_sans_doublons_$HOSTNAME.txt

# liste regles et envoie dans deux fichiers + liste regles dans les taches et envoie dans un fichier
$UXEXE/uxlst RUL INF | sort > /tmp/result_toutes_regles.txt
$UXEXE/uxshw tsk upr=* nomodel vupr=000 mu=* ses=* vses=* |grep -E "rule"  | cut -d '+' -f 2 | tr -d ' ' | cut -d ',' -f 1 | sort | uniq >> /tmp/result_toutes_regles.txt
sort /tmp/result_toutes_regles.txt | uniq -u > /tmp/result_toutes_regles_tries.txt


# script qui enleve les doublons (les regles de l'onglet regles + regles des taches)
FILE=/tmp/result_toutes_regles_tries.txt
> /tmp/result_sans_doublons_$HOSTNAME.txt
cat ${FILE} | while read LINE_BASE ; do 
		COMPTEUR=0
		cat ${FILE} | while read LINE_CP ; do 
			if [[ "${LINE_CP}" == "${LINE_BASE}" ]] ; then 
				COMPTEUR=$(( $COMPTEUR + 1 ))
				if [[ ${COMPTEUR} -ge 2 ]] ; then 
					break
				fi
			fi
		done
		if [[ ${COMPTEUR} -lt 2 ]] ; then
			echo "$LINE_BASE" >> /tmp/result_sans_doublons_$HOSTNAME.txt
		fi
done
scp -i /home/User_VIP/.ssh/id_rsa.nokey User_VIP@$SERVEUR:/tmp/result_sans_doublons_$HOSTNAME.txt /home/User_VIP/script/maj_calendrier_dollaru/RESULTATS_REGLES