for DIR in $(ls /universe/*/bin/uxshw) 	
do 
	ANNEE=$( date +%Y )
	SERVEUR=$( echo $DIR | cut -d '/' -f 3 )
	SOCIETE=$( echo $SERVEUR | cut -d '_' -f 1)
	. ./set_univ $SOCIETE
	YEAR=$( $DIR cal mu=* model | grep "Year      :" | tail -1 | tr -d ' ' | cut -d ':' -f 2 )
	if [[ ${YEAR} -le $ANNEE ]] ; then
			echo $DIR " ""############--->>>"$YEAR"<<<---############ ICI L'année maximum du calendrier ############";
	fi
done