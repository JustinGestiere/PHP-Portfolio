########################################### Liste serveurs Prod avec user Dollar Universe ###########################################


### Variable mit en place pour prendre tous les serveurs
LIST_SERVEUR="exemple1 exemple2 exemple3 machine1 machine2 machine3 test1 test2 test3 serveur1 serveur2 serveur3"


########################################### Script final ###########################################

for SERVEUR in ${LIST_SERVEUR} ; 
do 
	### Copie du fichier du serveur VIP vers le serveur demandé sous /tmp
	scp -i /home/User_VIP/.ssh/id_rsa.nokey /home/User_VIP/script/Fichier_fourni.sh $SERVEUR:/tmp;
	### Copie de /tmp vers /script
	ssh -i /home/User_VIP/.ssh/id_rsa.nokey ${SERVEUR} -- cp -P /tmp/Fichier_fourni.sh /home/User_VIP/script;
	### Modification des droits en 775
	ssh -i /home/User_VIP/.ssh/id_rsa.nokey ${SERVEUR} -- chmod 775 /home/User_VIP/script/Fichier_fourni.sh;
	### Execution du script dans le ficiher
	echo $SERVEUR && ssh -i /home/User_VIP/.ssh/id_rsa.nokey ${SERVEUR} -- sudo su - User_DollarU -c '/home/User_VIP/script/Fichier_fourni.sh SOC_PRODUCTION';
	### Recuperation des fichiers
	scp -i /home/User_VIP/.ssh/id_rsa.nokey $SERVEUR:/tmp/fichier_*log.txt /tmp/JGE;
done
	### Envoie par mail du dossier JGE
	tar -czf /tmp/JGE.tar.gz -C /tmp JGE
	MSG="Vous trouverez ci-joint les fichiers comprenant les retours de chaque serveur après le lancement du script."
	echo "$MSG" | mailx -s "Résultat $U du script" -a "/tmp/JGE.tar.gz" justin.gestiere@*.fr
