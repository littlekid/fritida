# fritida
Fritidsaktiviteter för alla!

## att göra
- [x] Initiera README
- [x] Fixa todo markup i README'n
- [x] Skapa dagbok (diary.md)
- [x] skapa upp staging.fritida.se
- [ ] Dela repot m Maja
- [ ] Skapa upp databas
- [ ] Lägg in konceptet aktivitet i databasen
  - [ ] Rubrik?
  - [ ] Beskrivning
  - [ ] Pris?
  - [ ] Vem har lagt in den? (konceptet användare/konto behövs)  
  - [ ] När lades den in?
  - [ ] När godkändes den ("aktiverades" - godkänd för visning på hemsidan/i apiet)
- [ ] Lägg till några aktiviteter manuellt i databasen. :)  
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

