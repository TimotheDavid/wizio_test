

# Lister les noms et prénoms des employés

    SELECT firstName, LastName FROM Person;

# Compter ceux dont le nom contient un A

    SELECT COUNT(LastName) FROM Person WHERE "A" IN LastName;

# Calculer le nombre d’heures moyen de vacances des employés par OrganizationLevel

    SELECT AVG(VacationHours), OrganizationLevel FROM Employee;

# Lister le nom, prénom et date d’anniversaire des personnes dont l’anniversaire est dans les 6
prochains mois

    SELECT firstName, LastName,  BirthDate FROM Person p
     JOIN Employee e ON e.BusiessEntityID = p.BusinessEntityID
        WHERE BirthDate > DATE_SUB(now(), INTERVAL 6 MONTH)

