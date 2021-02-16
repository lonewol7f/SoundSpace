// courses button set
function keyintro(){
	document.getElementById("welcome").style.display="none";
	document.getElementById("demo4").innerHTML ="Introduction";
	document.getElementById("demo").innerHTML ="A musical keyboard is the set of adjacent depressible levers or keys on a musical instrument. Keyboards typically contain keys for playing the twelve notes of the Western musical scale, with a combination of larger, longer keys and smaller, shorter keys that repeats at the interval of an octave. Depressing a key on the keyboard makes the instrument produce sounds—either by mechanically striking a string or tine (acoustic and electric piano, clavichord), plucking a string (harpsichord), causing air to flow through a pipe organ, striking a bell (carillon), or, on electric and electronic keyboards, completing a circuit (Hammond organ, digital piano, synthesizer). Since the most commonly encountered keyboard instrument is the piano, the keyboard layout is often referred to as the piano keyboard." ;
	document.getElementById("divimg").style.display="none";
	document.getElementById("div1").style.display="flex";
	document.getElementById("div2").style.display="none";
	document.getElementById("div3").style.display="none";
	document.getElementById("div4").style.display="none";
	document.getElementById("bot").style.display="none";

}
function pianointro(){
	document.getElementById("welcome").style.display="none";
	document.getElementById("demo4").innerHTML ="Introduction";
	document.getElementById("demo").innerHTML="The piano is an acoustic, stringed musical instrument invented in Italy by Bartolomeo Cristofori around the year 1700 (the exact year is uncertain), in which the strings are struck by wooden hammers that are coated with a softer material (modern hammers are covered with dense wool felt; some early pianos used leather). It is played using a keyboard, which is a row of keys (small levers) that the performer presses down or strikes with the fingers and thumbs of both hands to cause the hammers to strike the strings.";
	document.getElementById("divimg").style.display="none";
	document.getElementById("div2").style.display="flex";
	document.getElementById("div1").style.display="none";
	document.getElementById("div3").style.display="none";
	document.getElementById("div4").style.display="none";
	document.getElementById("bot").style.display="none";

}
function drumintro(){
	document.getElementById("welcome").style.display="none";
	document.getElementById("demo4").innerHTML ="Introduction";
	document.getElementById("demo").innerHTML="The drum is a member of the percussion group of musical instruments. In the Hornbostel-Sachs classification system, it is a membranophone.[1] Drums consist of at least one membrane, called a drumhead or drum skin, that is stretched over a shell and struck, either directly with the player's hands, or with a percussion mallet, to produce sound. There is usually a resonance head on the underside of the drum, typically tuned to a slightly lower pitch than the top drumhead. Other techniques have been used to cause drums to make sound, such as the thumb roll. Drums are the world's oldest and most ubiquitous musical instruments, and the basic design has remained virtually unchanged for thousands of years.";
	document.getElementById("divimg").style.display="none";
	document.getElementById("div3").style.display="flex";
	document.getElementById("div1").style.display="none";
	document.getElementById("div2").style.display="none";
	document.getElementById("div4").style.display="none";
	document.getElementById("bot").style.display="none";
}
function guitarintro(){
	document.getElementById("welcome").style.display="none";
	document.getElementById("demo4").innerHTML ="Introduction";
	document.getElementById("demo").innerHTML="The guitar is a fretted musical instrument that usually has six strings.[1] It is typically played with both hands by strumming or plucking the strings with either a guitar pick or the fingers/fingernails of one hand, while simultaneously fretting (pressing the strings against the frets) with the fingers of the other hand. The sound of the vibrating strings is projected either acoustically, by means of the hollow chamber of the guitar (for an acoustic guitar), or through an electrical amplifier and a speaker.";
	document.getElementById("divimg").style.display="none";
	document.getElementById("div4").style.display="flex";
	document.getElementById("div1").style.display="none";
	document.getElementById("div3").style.display="none";
	document.getElementById("div2").style.display="none";
	document.getElementById("bot").style.display="none";
}

// 3Week section

// DRUM

function ksec1(){
	document.getElementById("bot").style.display="block";
	document.getElementById("demo3").innerHTML ="WEEK ONE"
	document.getElementById("demo2").innerHTML="The notes on pianos and keyboards are exactly the same. Each note has its own unique pitch— something that is achieved on both pianos and keyboards.<br><br>We all know having all of those keys sitting in front of you can be quite a bit intimidating. Many beginner piano players tend to have this idea that all of the keys are different notes when in reality they are the same notes in a sequence played at different octaves.<br><br>Notice there are two black keys together, a space and then three black keys together. The note on the left of the first black key is a C. The notes that come after C are a consequence of that note. Read below for more information regarding the keys." 
				}
function ksec2(){
	document.getElementById("bot").style.display="block";
	document.getElementById("demo3").innerHTML ="WEEK TWO"
	document.getElementById("demo2").innerHTML="Remember those white keys that I told you about earlier? C, D, E, F, G, A, B and C? That is your first scale. The C major scale. Simply by using this scale you can play chords, a melody or even arpeggios.<br><br>Using the key of C you can learn your first position which is, you guessed it, C positon. Start with your right thumb on middle C (this key is normally indicated on your keyboard), place your index finger on D, middle finger on E, ring finger on F and pinky on G."
			}
function ksec3(){
	document.getElementById("bot").style.display="block";
	document.getElementById("demo3").innerHTML ="WEEK THREE"
	document.getElementById("demo2").innerHTML=  "Learning keyboard can be tough, but with these fundamentals you are now well on your way to playing like the masters. Don’t be afraid to keep a notebook to take notes on things that you don’t understand or even make a binder to collect sheet music, notes and helpful tips and tricks.<br><br>When you first learn the piano, it takes a while to get used to playing on both hands— allow yourself to increase dexterity and coordination.<br><br>Until next time, keep practicing!"
		
}

// PIANO

function pia1(){
	document.getElementById("bot").style.display="block";
	document.getElementById("demo3").innerHTML ="WEEK ONE"
	document.getElementById("demo2").innerHTML="The first thing we’ll do is break the piano down into more manageable chunks. If you look closely at the keyboard, you’ll see that there is actually a pattern to how the keys are laid out. They’re laid out in such a way that after 12 keys the notes repeat themselves. We call this sequence of 12 keys an Octave. A traditional 88 key piano can be split up into just 7 octaves. Learning to identify this octave pattern is crucial for finding your way around the keyboard." 
				}
function pia2(){
	document.getElementById("bot").style.display="block";
	document.getElementById("demo3").innerHTML ="WEEK TWO"
	document.getElementById("demo2").innerHTML="Knowing middle C is one thing, but what about all those other notes in the octave? These notes are all given letters as well. For now, just focus on the white keys. Walking up from middle C, the note order is D, E, F, G, A, B, and then the octave pattern repeats with C again."
			}
function pia3(){
	document.getElementById("bot").style.display="block";
	document.getElementById("demo3").innerHTML ="WEEK THREE"
	document.getElementById("demo2").innerHTML=  "Now that you know the numbers for your fingers and the names of the notes, you can apply your knowledge to play a C major scale. The C major scale consists of eight notes from C to the C in the octave above. This means that you’ll need to learn some special finger techniques to get your five fingers to play an eight note sequence fluidly.<br><br>The fingering pattern in the right hand is 1, 2, 3, 1, 2, 3, 4, 5. Notice how there’s a fingering reset between the 3rd and 4th notes of the scale. In order to play this order of fingerings fluidly, you’ll need to master a technique called the thumbtuck. A thumbtuck involves curling your thumb under your hand in order to play reposition your hand and continue playing a phrase. Although it may seem simple, the thumbtuck is one of the most important skills in a pianist’s bag of tricks, so make sure you’re always aware of it during your practice sessions!"
		
}

// DRUM

function dru1(){
	document.getElementById("bot").style.display="block";
	document.getElementById("demo3").innerHTML ="WEEK ONE"
	document.getElementById("demo2").innerHTML="<b>Introduction about drum kits</b><br><br> 1.Snare Drum<br>2.Bass Drum<br>3.Toms, Hi-Hat, and Cymbals<br>" 
				}
function dru2(){
	document.getElementById("bot").style.display="block";
	document.getElementById("demo3").innerHTML ="WEEK TWO"
	document.getElementById("demo2").innerHTML="Once you have your basic equipment (drum sticks, playing surface) and a good sense of proper technique, you’re ready to start learning the fundamental patterns of drumming, or the simple drum rudiments.<br>Drum rudiments are often described as the basic building blocks of learning how to play the drums. There are 40 essential rudiments, each of which consist of a unique sticking pattern (coordination of right and left hands) and distinct rhythm. Mastering all 40 rudiments provides you with a wealth of control and rhythmic knowledge that you can then apply to the entire drum set."
			}
function dru3(){
	document.getElementById("bot").style.display="block";
	document.getElementById("demo3").innerHTML ="WEEK THREE"
	document.getElementById("demo2").innerHTML=  "Drummers are encouraged to learn how to read drum notation. Many drummers are also expected to know how to read sheet music, as it’s a requirement of school concert bands, marching bands, jazz bands, and many professional ensembles. When you understand drum sheet music, it can be used as a drummer’s secret weapon.<br><br>Drum notation is a fairly simple code and once you understand the basics it becomes easy to apply that knowledge to more advanced concepts. It’s important for beginning drummers to start with reading very easy drum rhythms before trying to jump into understanding intermediate drum beats."
		
}

// GUITAR

function gui1(){
	document.getElementById("bot").style.display="block";
	document.getElementById("demo3").innerHTML ="WEEK ONE"
	document.getElementById("demo2").innerHTML="Identify string names and numbers and read music notation, tablature, chord block diagrams, and fretboard maps." 
				}
function gui2(){
	document.getElementById("bot").style.display="block";
	document.getElementById("demo3").innerHTML ="WEEK TWO"
	document.getElementById("demo2").innerHTML="Practice picking, finger picking, and strumming patterns."
			}
function gui3(){
	document.getElementById("bot").style.display="block";
	document.getElementById("demo3").innerHTML ="WEEK THREE"
	document.getElementById("demo2").innerHTML=  "Play various chords including major and minor triads, open, barre, and pose chords<br><br>Read and play a lead sheet."
		
}
