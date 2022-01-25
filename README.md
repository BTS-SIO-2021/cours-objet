# Histoire

A partir des années 60, une nouvelle façon de concevoir la programmation émerge : la programmation orientée objet. Le principe : appliquer dans la vie "informatique" ce que nous faisons dans la vie réelle. En effet dans la vie réelle, je ne manipule pas des variables avec des valeurs différentes, je manipule des objets. 
Beaucoup de langages informatiques supportent la POO. Les grands principes que l'on retrouve partout POO sont :
- l'encapsulation
- l'héritage
- le polymorphisme

# Un Objet ?
Une représentation d'une entité matériel ou immatérielle. Cette entité elle possède des propriétés (attributs/données) ou des actions (méthodes). Exemple : une voiture, une personne, un animal, un compte bancaire, une video.

# Attributs
Caractéristiques propres à notre objet : on dit aussi "propriétés". Exemple : une voiture a différents atrributs par exemple : un prix, un nombre de roues, un modèle, une marque, une motorisation, etc ... Autre exemple une vidéo : durée, format, résolution, encodage, titre, etc ...

# Méthodes
Une méthode c'est une action applicable/réalisable par un objet. Exemple une voiture, ça peut rouler, freiner, tourner à droite, tourner à gauche, etc ... Une vidéo ca peut être stoppée, accéléréé, supprimée, ralentir, changer la résolution, etc etc ...

# Classe 
Une classe c'est le modèle, le moule, le plan de fabrication qui va définir la structure de mon objet, donc définir ses attributs et ses méthodes. 
Pour créer un objet, je vais instancié un objet à partir de sa classe. 

# Visibilité 
La visibilité d'une propriété permet de définir si on peut lire et écrire dans cette propriété depuis un code externe à la classe. 
- public = open bar => autorise l'accès aux propriétés et aux méthodes depuis l'extérieur, tout le monde peut faire ce qu'il veut (c'est-à-dire modifier à sa convenance, ceci représente donc un risque). L'intégrité du modèle comme source de vérité est menacée.
- private = sécurisé => seul le code à l'intérieur de la classe peut modifier ma donnée (ou la lire).

En quoi c'est utile ? Ca vérrouille l'accès à une propriété ou une méthode pour empêcher qu'un code externe à la classe modifie la valeur de la propriété ou accède à la méthode. Ceci nous permet de conserver l'intégrité du modèle comme source de vérité.

# Getter
Méthode publique d'une classe retournant la valeur d'une propriété privée

# Setter 
Méthode publique d'une classe permettant de modifier la valeur d'une propriété privée