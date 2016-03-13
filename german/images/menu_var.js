

	var NoOffFirstLineMenus=7;			// Number of first level items
	var LowBgColor='white';			// Background color when mouse is not over
	var LowSubBgColor='#4E6F11';			// Background color when mouse is not over on subs
	var HighBgColor='#8B9F00';			// Background color when mouse is over
	var HighSubBgColor='#FF6600';			// Background color when mouse is over on subs
	var FontLowColor='#666666';			// Font color when mouse is not over
	var FontSubLowColor='#E8E8E8';			// Font color subs when mouse is not over
	var FontHighColor='white';			// Font color when mouse is over
	var FontSubHighColor='#E8E8E8';			// Font color subs when mouse is over
	var BorderColor='#EBEADE';			// Border color
	var BorderSubColor='#758D54';			// Border color for subs
	var BorderWidth=1;				// Border width
	var BorderBtwnElmnts=1;			// Border between elements 1 or 0
	var FontFamily="verdana,arial,comic sans ms,technical"	// Font family menu items
	var FontSize=7;				// Font size menu items
	var FontBold=1;				// Bold menu items 0 or 0
	var FontItalic=0;				// Italic menu items 1 or 0
	var MenuTextCentered='left';			// Item text position 'left', 'center' or 'right'
	var MenuCentered='left';			// Menu horizontal position 'left', 'center' or 'right'
	var MenuVerticalCentered='top';		// Menu vertical position 'top', 'middle','bottom' or static
	var ChildOverlap=.2;				// horizontal overlap child/ parent
	var ChildVerticalOverlap=.2;			// vertical overlap child/ parent
	var StartTop=180;				// Menu offset x coordinate 
	var StartLeft=335;				// Menu offset y coordinate
	var VerCorrect=0;				// Multiple frames y correction
	var HorCorrect=0;				// Multiple frames x correction
	var LeftPaddng=5;				// Left padding
	var TopPaddng=0;				// Top padding
	var FirstLineHorizontal=1;			// SET TO 1 FOR HORIZONTAL MENU, 0 FOR VERTICAL
	var MenuFramesVertical=1;			// Frames in cols or rows 1 or 0
	var DissapearDelay=1000;			// delay before menu folds in
	var TakeOverBgColor=1;			// Menu frame takes over background color subitem frame
	var FirstLineFrame='navig';			// Frame where first level appears
	var SecLineFrame='space';			// Frame where sub levels appear
	var DocTargetFrame='space';			// Frame where target documents appear
	var TargetLoc='';				// span id for relative positioning
	var HideTop=1;				// Hide first level when loading new document 1 or 0
	var MenuWrap=1;				// enables/ disables menu wrap 1 or 0
	var RightToLeft=0;				// enables/ disables right to left unfold 1 or 0
	var UnfoldsOnClick=0;			// Level 1 unfolds onclick/ onmouseover
	var WebMasterCheck=0;			// menu tree checking on or off 1 or 0
	var ShowArrow=1;				// Uses arrow gifs when 1
	var KeepHilite=1;				// Keep selected path highligthed
	var Arrws=['tri.gif',3,6,'tridown.gif',6,3,'trileft.gif',3,6];	// Arrow source, width and height

function BeforeStart(){return}
function AfterBuild(){return}
function BeforeFirstOpen(){return}
function AfterCloseAll(){return}


// Menu tree
//	MenuX=new Array(Text to show, Link, background image (optional), number of sub elements, height, width);
//	For rollover images set "Text to show" to:  "rollover:Image1.jpg:Image2.jpg"

Menu1=new Array("hotels","","",2,14,43);
	Menu1_1=new Array("Bali","hotels/hotel_bali.htm","",7,14,150);
		Menu1_1_1=new Array("Benoa area","hotels/hotel_grandmirage.htm","",0,14,100);
		Menu1_1_2=new Array("Kuta area","hotels/hotel_theroyal_seminyak.htm","",0);
		Menu1_1_3=new Array("Nusa Dua area","hotels/hotel_putribali.htm","",0);
		Menu1_1_4=new Array("Jimbaran area","hotels/hotel_keraton.htm","",0);
		Menu1_1_5=new Array("Sanur area","hotels/hotel_natoursindu.htm","",0);
		Menu1_1_6=new Array("Ubud area","hotels/hotel_cahayadewa.htm","",0);
		Menu1_1_7=new Array("Other areas","hotels/hotel_puribagus-cnd.htm","",0);
	Menu1_2=new Array("other location on request","","",0);
Menu2=new Array("Bali villas","villas/villas_bali.htm","",0,14,60);
Menu3=new Array("tours","","",2,14,36);
	Menu3_1=new Array("regional tours","","",0,14,100);
	Menu3_2=new Array("adventure tours","adv-tours.htm","",0);
Menu4=new Array("metal handycrafts","","",0,14,100);
Menu5=new Array("transportation","","",2,14,80);
	Menu5_1=new Array("transport","transport.htm","",0,14,100);
	Menu5_2=new Array("car rental","car_rental.htm","",0);
Menu6=new Array("general info","","",2,14,70);
	Menu6_1=new Array("Map","","",2,14,100);
		Menu6_1_1=new Array("Map of Indenesia","mapindonesia.htm","",0,14,120);
		Menu6_1_2=new Array("Map of Bali","mapbali.htm","",0,14,0);
	Menu6_2=new Array("Travel Tips","tips.htm","",0);
Menu7=new Array("","","",0,14,50);