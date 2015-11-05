<?php
class Blog
{

	public function BlogView()
	{
		echo " 
					
				<div class ='largeImageContainer8'>	
				</div>	
			
			 	 <div class = 'info'>	
			 	 </div>
			 	 
				<div class = 'blogViewContainer'>	 	 
			 	<div class = 'blogContainer'>	 	 
			 	 	
			 	 	<section>
				 	 	<h2>CVbloggen en ny del av CVsmedjan</h2>	 
			 	 		<p>Välkommen till CVsmedjans blogg. Bloggen kommer att innehålla tips på hur du skriver ett bra CV, råd inför intervjuer och allmänna tips om jobb och jobbsök.
						Följ oss på <a href='http://www.twitter.com/cvsmedjan' target='_blank'>twitter</a> för att få en notis när vi publicerar något nytt i bloggen!</p>	 		
			 	 	</section>
			 	 	
			 	 	<section id= 'blog2'>
			 	 	<h2>“Varför ska vi anställa just dig?”. Såhär besvarar du på bästa sätt.</h2>

                    <p>Frågan “Varför ska vi anställa just dig?” kommer förmodligen att dyka upp på ett eller annat sätt. Antingen arbetsgivaren dig på telefon eller under intervjun.
                    Att öva upp ett bra svar till frågan skadar inte och lyckas du motivera varför just du är rätt kandidat för jobbet, kan det leda till en anställning. 
                    </p>
                    
                    <h3>Läs på om företaget.</h3>
                    
                    <p>Att komma på en arbetsintervju och inte ha någon som helst aning om vad företaget arbetar med, lär inte ge dig en anställning.
                    En arbetsgivare vill gärna höra att du har varit inne på företagets hemsida och läst på om dem. Det ger en signal till arbetsgivaren att du verkar extra intresserad av tjänsten och företaget. Är du däremot inte                      så insatt i vad företaget arbetar med kommer arbetsgivaren få en känsla av att du söker ett jobb som om det vore vilket annat jobb som helst.
                    </br></br>
                    <b>Tips:</b> Läs på om företaget, titta på hur företaget utvecklats, hur långt har de kommit, hur arbetar företaget, hur är arbetsplatsen. Hitta intressanta punkter och ta upp det du gillar med företaget när du                      svara på frågan. Motivera varför du vill jobba hos företaget.</p>
                    
                    <h3>Förklara varför just du är bäst</h3>
                    
                    <p>När du blir kallad på en intervju så har arbetsgivaren redan bestämt sig att du är kvalificerad för positionen. Samma sak gäller för de andra kandidaterna som ska på intervju. Därför är det viktigt att du kan                        förklara varför just du är bäst och vad som skiljer dig från resterande kandidater.
                    </br></br>
                    <b>Tips:</b> Får du frågan om varför företaget ska anställa just dig, försök att inte upprepa det som står i ditt CV. Det är bättre om du svarar på frågan genom att belysa något du åstadkommit på din förra                           arbetsplats (eller under skolprojekt) som visat gott arbete från din sida och belysa ytterligare att de kan förvänta sig liknande arbete från dig.</p>
                    
                    <h3>Förtydliga att du verkligen vill jobba där.</h3>
                    
                    <p>Glöm inte att visa din entusiasm för jobbet och företaget och belys gärna dina personliga egenskaper som du tror kommer väl till pass hos företaget. </p>

			 	 	</section>
			 	 	
			 	 	<section>
			 	 	<img src = 'pictures/cvtips3.png' alt='CV tips'/>
				 	 	
				 	 	<p>Det är inte alltid lätt att veta hur man skriver ett bra CV. För att inviga den nya bloggen ger CVsmedjan 5 snabba tips att tänka 
				 	 	på när du skriver ditt CV.</br></br>		
				 	 	
				 	 	<b>1: Arbetslivserfarenhet</b></br>
				 	 	<i>Skriv din arbetslivserfarenhet i motsatt kronologisk ordning. Det vill säga att du skriver din senaste anställning först och arbetar dig bakåt 
				 	 	i tiden.</i></br>
				 	 	<b>2: Utbildning</b></br>
				 	 	<i>Skriv utbildningen på samma sätt som arbetslivserfarenhet. Tänk på att du även inte behöver ta med alla studier du haft, utan skriv ned de som är betydelsefulla 
				 	 	och intressanta för det jobb du söker.</i></br>
				 	 	<b>3: Fotografi</b></br>
				 	 	<i>Ska du ha ett fotografi i CV:t se till då att:</br>
				 	    -Använd en vit eller neutral bakgrund och bra ljussättning.</br>
				 	 	-Klä dig professionellt och helst anpassat efter tjänst.</br>
				 	    -Ansiktsbild.</br>
				 	    -GLÖM INTE ATT LE!</i></br>
				 	 	<b>4: Klyschor i CV:et! </b></br>
				 	 	<i>Var försiktig med klyschor i CV:t och se till att du inte repeterar samma sak.</i></br>
				 	 	<b>5: Stavfel!!! </b></br>
				 	 	<i>Stavfel är något som aldrig får finnas på ett CV och tyvärr händer det att man missar några stavningar. Så titta igenom ditt CV noga och låt gärna
				 	 	någon annan läsa igenom det.</i>
				 	 	</p>
					</section>
                    <div class ='clear'>
                    </div>
			 	 </div>
			 	 </div>
			 	 
			 	 ";		  
	}
	
	public function GetBlogID()
	{
		if(isset($_REQUEST[$this->blogID])==true)
		{
			return $_REQUEST[$this->blogID];
		}
	}
}
?>