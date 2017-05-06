# fritida
Fritidsaktiviteter för alla!

## att göra
- [x] Initiera README
- [x] Fixa todo markup i README'n
- [x] Skapa dagbok (diary.md)
- [x] skapa upp staging.fritida.se
- [x] Dela repot m Maja
- [x] Skapa upp databas
- [x] Lägg in konceptet aktivitet i databasen
  - [x] ID!
  - [x] Rubrik?
  - [x] Beskrivning
  - [x] Pris?
  - [ ] Vem har lagt in den? (konceptet användare/konto behövs)
  - [x] När lades den in?
  - [x] När godkändes den ("aktiverades" - godkänd för visning på hemsidan/i apiet) (key: activated)
  - [ ] Bilder
- [x] Lägg till några aktiviteter manuellt i databasen. :)
- [ ] Lägg till ett api (/api)
  - [x] Visar alla aktiviteter på /api/activities
  - [ ] Kunna lägga till aktiviteter genom att posta en json till /api/activities
  - [ ] Kräv api-nyckel för att får göra request till API:et (om det inte är hemsidan själv som gör förfrågan - hur vet/ser vi det? :) )
  - [x] Gör så att api:et både klarar av att ta emot "POSTs" och json input! :)
- [ ] Lista aktiviteter på hemsidan - hämtas ifrån databasen
- [ ] endpoint på api.fritida.se som kan ta emot posts, med apinyckel(!), för att lägga till aktiviteteter
- [ ] Lägg till koncepten konto & användare i databasen - användare kan, men måste inte ha ett konto. För flera olika användare kan vilja hantera en del aktiviteter genemsamt, men inte andra.  
  - [ ] Användare har olika nivåer av rättigheter
  - [ ] Har användaren aktiverat sitt konto? (Swishat)
  - [ ] e-post
  - [ ] mobilnummer
  - [ ] namn
  - [ ] användarnamn
  - [ ] När skapades kontot?
  - [ ] konton (ofta en arrangör/organisation/sponsor) (inte användare) kan ha bild (logga)
  - [ ] apinyckel - användare kan ha api-nyckel.
  - [ ] lösenord för inloggning online (med mobilnummer eller e-post)
- [ ] kräv apinyckel @ endpointen för att lägga till aktiviteter
- [ ] Lägg in opengraph data
  - [ ] Bild
  - [ ] Rubrik
  - [ ] Beskrivning
- [ ] Lägg till konceptet nyckelord i databasen
  - [ ] ord
  - [ ] hänga ihop med andra ord? koll potentiella felstavningar / alternativa sätt att skriva samma sak så att vi fångar upp det när folk lägger till aktiviteter eller söker?
  - [ ] aktivt? (D.v.s. vi godkänner i början manuellt alla nya nyckelord
- [ ] Kunna koppla samman nyckelord
- [ ] Lägg till plats/platser i databasen
  - [ ] long/lat
  - [ ] namn (ort ok att lägga in utan long lat helt enkelt?
  - [ ] Hur hitta till platsen? (Får vara del av aktivitetens beskrivning i början?
- [ ] Lägg upp ett SMS (och MMS?) telefonnummer för fritida
- [ ] Nollställa lösenord?

Koncept:
Aktiviteter ((rubrik alls viktigt?) beskrivning, ev. plats/väder/pris/antal personer/krävs ngn utrustning? Om ja finns den att låna/hyra på plats?
Platser
Användare (har mobilnummer! och/eller e-postadress!)
Nyckelord "Kategorier"(egentligen bara utvalda nyckelord, men visa "kategorier" på hemsidan. 
Välkomna vänner och andra att testa att lägga till aktivitet på hemsidan! :)
Snabbt och enkelt kunna blocka en användare som skickar in strunt. 
Lägg upp ett fint mobilnummer!
Vilka aktiviteter saknar du? Skicka in tips via sms till:
Skicka en aktivitet per sms!
Hur gör vi för att slå samman kopior?
Ge den som skickat in tipset cred. Fråga om de vill skapa användare? Annars visas de som anonyma. Vilka användarnamn vill vi spara till vänner, familj och bekanta? :)
litylekid/Victoria/pinkprogramming...

Prata med Simply events confetti - kanske samarbeta så att de kan erbjuda användare en knapp som säger "lägg till och visa upp mitt event på fritida" ? :)
+ skriv också till simply events + invajo!

Bygg upp ett api som kan ta emot "posts", i requesten måste folk skicka med nyckel!!!! som parameter i urlen!

Just det - i helloworld - förklara att www-url-encoded... motsvarar att skicka med parametrar i url:en. 

Lägg in en del aktiviteter manuellt, måste ju fylla den med lite innehåll. Gradera aktiviteter. Användare som är pålitliga kan välja att gradera aktiviteter:
Samhällsnytta? Ja / Nej? Om ja, på en skala från 0-10? (10 stor nytta, 0, ingen nytta alls, 1 pyttelite nytta. )

Kunna visa listor...
Hur kopplar vi ihop en aktivitet med en plats?
Vi kan börja med "orter", och köra long/lat, om vi hinner. 


Nyckelord (taggar) - hur taggar jag en altivitet? (Skicka med taggar!) din aktivitet får direkt ett id!
Om du har skapat aktiviteten så kan du:
Fortsätta lägga till taggar...
Ta bort taggar:
Ändra rubriken/plats/priset/utrustning...

Webbformulär? OM vi hinner! :)


drop
stream
lake
river
iceberg
ocean
asteroid

Olika nivåer av tillgång till tjänsten. 


En användare som bidrar (eJ event organizer), kan vara:
Älg, lama, lax, gnu, pingvin...
Älgen - "mästaren"
Sen kommer GNUn
Sen pingvinen
Sedan laxen
Sedan laman


Footer: alla tjänster:
Organiserar ni evenemang/aktiviteter?
Förening? Lägg till er här!
Bekräfta er förening: 100kr i engångsavgift: en riktig människa kollar att ni finns på riktigt... :)


## ideas & thoughts
- [ ] bot.fritida.se
- [ ] api.fritida.se 
- [ ] ta emot nya aktiviteter via sms
- [ ] RSS-flöde! Prenumerera på nyckelord.
- [ ] aktiviteter måste ha bra slugs

### Ideas & thoughts - details
Hemsidan ska fungera även utan js
#### Ta emot nya aktiviteter
Ta emot nya aktiviteter via sms (pratar med fritida-apiet)
#### fritida api - hämta & visa aktiviteter
Om du har en hemsida som handlar om...  så kan du lista relaterade aktiviter ifrån fritida.
(Affärspotential: Om du har ett premiumkonto, så är länkarna om dina aktiviteter skickas ut direkt länkade till din aktivitets hemsida, annars är det länkar till till info om aktiviteten på fritida.se :) )
#### Annat
Vill vi att en aktivitet ska visas på /aktivitet/id? Eller /aktiviteter/id?
Vad vill vi berätta på sidan /aktivitet ?
sidan /aktiviteter ?
Open graph data
- Enkelt att dela vidare och tipsa vänner då
#### bot.fritida.se
SMSbot!
Du kan lägga till aktiviteteter genom att skicka sms till numret...
Skicka:
...
Du kan swisha 100kr: (200kr, om folk nappar fort* kan komma att ändras).  - då aktiveras ditt konto omgående, och dina aktiviteter syns!
Överskott som kommer in under dagen (om de överstiger 3000kr, går till pinkprogramming!
Aktiverade konton...
Direkt aktivering av ditt konto, så att det du skickar in, syns på hemsidan!
För varje timme så går priset för att aktivera ett konto upp?!  Förklara hur det kommer fungera! Vill du vara med?! Swisha 20/40/60/80/100/120/140/160/170/200kr till...
så aktiverar vi ditt konto direkt!
Max 20 nya konton i timmen, till detta pris, om vi kommer upp i 20 konton, så stiger priset!
Swisha 20kr....

### SEN
- [ ] Känn av ifall hemsidan laddas snabbt eller långsamt, ej hämta bilder om långsamt, isf istället visa " hämta bilden".
Separat telefonnummer till stagingmiljön!
Stagingmiljön kopierar (i framtiden) automatiskt över hela produktionsdstabasen, vid varje reset... så att vi kan leka med riktig aktuell data! :)
Få igång lokal miljö  - den kan vi givetvis inte sms:a till, men vi kan fake:a ett anrop!  :)
Vi har en "ticker" -> att vi tickar ner för varje sms som vi behöber skicka (kostnad att räkna bort ifrån ev. intäkter!) 
Ha med lite grafer på hemsidan:
FÖRETAG?
Visas upp för 1000kr! SWISHA... eller får faktura

## vision


## tools
Things, git, vim, github
Things, 46 elks, vim, sequel pro, PHP, Binero, github, iterm, scp, filezilla


Other
## Dagbok
Beskriver idén, Maja är på - teamet bildas!
Letar efter hur skapa todolistor i readme som ser schysst ut på github

## Anteckningar (Resurser)
[github readme markup](https://help.github.com/articles/basic-writing-and-formatting-syntax/#task-lists)
