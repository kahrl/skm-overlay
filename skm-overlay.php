<?php

# must be set according to the codeset the input XML file is in
setlocale(LC_ALL, 'en_US.utf8');

# font size below which an OCR fragment is considered to be a footnote
define('FOOTNOTE_THRESHOLD', 8.0);

# min y position at which an OCR fragment may be considered a page number
define('PAGENUM_THRESHOLD', 190.0);

# max dissimilarity for words to be considered the same
define('LEVENSHTEIN_THRESHOLD', 0);

# width of DinA4 page, in millimeters
define('DINA4_H', 210.0);

# height of DinA4 page, in millimeters
define('DINA4_V', 297.0);

# width of DinA4 page, in millimeters
define('DINA5_H', 148.0);

# height of DinA4 page, in millimeters
define('DINA5_V', 210.0);


###################
## Source colors ##
###################

$COLORMAP = array(
	"medium forest green=50,129,75",
	"crimson=220,20,60",
	"teal=0,128,128",
	"chartreuse=127,255,0",
	"midnight blue=25,25,112",
	"navy=0,0,128",
	"light coral=240,128,128",
	"tomato=255,99,71",
	"orange red=255,69,0",
	"cornflower blue=100,149,237",
	"burlywood=222,184,135",
	"dark slate blue=72,61,139",
	"medium orchid=186,85,211",
	"medium blue=0,0,205",
	"royal blue=65,105,225",
	"blue=0,0,255",
	"dodger blue=30,144,255",
	"deep sky blue=0,191,255",
	"sky blue=135,206,235",
	"light sky blue=135,206,250",
	"steel blue=70,130,180",
	"light steel blue=176,196,222",
	"light blue=173,216,230",
	"powder blue=176,224,230",
	"pale turquoise=175,238,238",
	"dark turquoise=0,206,209",
	"medium turquoise=72,209,204",
	"turquoise=64,224,208",
	"cyan=0,255,255",
	"light cyan=224,255,255",
	"LightCyan=224,255,255",
	"cadet blue=95,158,160",
	"CadetBlue=95,158,160",
	"medium aquamarine=102,205,170",
	"aquamarine=127,255,212",
	"dark green=0,100,0",
	"dark olive green=85,107,47",
	"dark sea green=143,188,143",
	"sea green=46,139,87",
	"medium sea green=60,179,113",
	"light sea green=32,178,170",
	"pale green=152,251,152",
	"spring green=0,255,127",
	"lawn green=124,252,0",
	"green=0,255,0",
	"medium spring green=0,250,154",
	"green yellow=173,255,47",
	"lime green=50,205,50",
	"yellow green=154,205,50",
	"forest green=34,139,34",
	"olive drab=107,142,35",
	"dark khaki=189,183,107",
	"khaki=240,230,140",
	"pale goldenrod=238,232,170",
	"light goldenrod yellow=250,250,210",
	"light yellow=255,255,224",
	"yellow=255,255,0",
	"gold=255,215,0",
	"light goldenrod=238,221,130",
	"goldenrod=218,165,32",
	"dark goldenrod=184,134,11",
	"rosy brown=188,143,143",
	"indian red=205,92,92",
	"saddle brown=139,69,19",
	"sienna=160,82,45",
	"peru=205,133,63",
	"beige=245,245,220",
	"wheat=245,222,179",
	"sandy brown=244,164,96",
	"tan=210,180,140",
	"chocolate=210,105,30",
	"firebrick=178,34,34",
	"brown=165,42,42",
	"dark salmon=233,150,122",
	"salmon=250,128,114",
	"light salmon=255,160,122",
	"orange=255,165,0",
	"dark orange=255,140,0",
	"coral=255,127,80",
	"slate blue=106,90,205",
	"medium slate blue=123,104,238",
	"light slate blue=132,112,255",
	"red=255,0,0",
	"hot pink=255,105,180",
	"deep pink=255,20,147",
	"pink=255,192,203",
	"light pink=255,182,193",
	"pale violet red=219,112,147",
	"maroon=176,48,96",
	"medium violet red=199,21,133",
	"violet red=208,32,144",
	"magenta=255,0,255",
	"violet=238,130,238",
	"plum=221,160,221",
	"orchid=218,112,214",
	"dark orchid=153,50,204",
	"dark violet=148,0,211",
	"blue violet=138,43,226",
	"purple=160,32,240",
	"medium purple=147,112,219",
	"thistle=216,191,216",
	"snow=255,250,250",
	"ghost white=248,248,255",
	"white smoke=245,245,245",
	"gainsboro=220,220,220",
	"floral white=255,250,240",
	"old lace=253,245,230",
	"linen=250,240,230",
	"antique white=250,235,215",
	"papaya whip=255,239,213",
	"blanched almond=255,235,205",
	"bisque=255,228,196",
	"peach puff=255,218,185",
	"navajo white=255,222,173",
	"moccasin=255,228,181",
	"cornsilk=255,248,220",
	"ivory=255,255,240",
	"lemon chiffon=255,250,205",
	"seashell=255,245,238",
	"honeydew=240,255,240",
	"mint cream=245,255,250",
	"azure=240,255,255",
	"alice blue=240,248,255",
	"lavender=230,230,250",
	"lavender blush=255,240,245",
	"misty rose=255,228,225",
	"white=255,255,255",
	"black=0,0,0",
	"dark slate gray=47,79,79",
	"dark slate grey=47,79,79",
	"dim gray=105,105,105",
	"dim grey=105,105,105",
	"slate gray=112,128,144",
	"slate grey=112,128,144",
	"light slate gray=119,136,153",
	"light slate grey=119,136,153",
	"gray=190,190,190",
	"grey=190,190,190",
	"light grey=211,211,211",
	"light gray=211,211,211",
	"snow1=255,250,250",
	"snow2=238,233,233",
	"snow3=205,201,201",
	"snow4=139,137,137",
	"seashell1=255,245,238",
	"seashell2=238,229,222",
	"seashell3=205,197,191",
	"seashell4=139,134,130",
	"AntiqueWhite1=255,239,219",
	"AntiqueWhite2=238,223,204",
	"AntiqueWhite3=205,192,176",
	"AntiqueWhite4=139,131,120",
	"bisque1=255,228,196",
	"bisque2=238,213,183",
	"bisque3=205,183,158",
	"bisque4=139,125,107",
	"PeachPuff1=255,218,185",
	"PeachPuff2=238,203,173",
	"PeachPuff3=205,175,149",
	"PeachPuff4=139,119,101",
	"NavajoWhite1=255,222,173",
	"NavajoWhite2=238,207,161",
	"NavajoWhite3=205,179,139",
	"NavajoWhite4=139,121,94",
	"LemonChiffon1=255,250,205",
	"LemonChiffon2=238,233,191",
	"LemonChiffon3=205,201,165",
	"LemonChiffon4=139,137,112",
	"cornsilk1=255,248,220",
	"cornsilk2=238,232,205",
	"cornsilk3=205,200,177",
	"cornsilk4=139,136,120",
	"ivory1=255,255,240",
	"ivory2=238,238,224",
	"ivory3=205,205,193",
	"ivory4=139,139,131",
	"honeydew1=240,255,240",
	"honeydew2=224,238,224",
	"honeydew3=193,205,193",
	"honeydew4=131,139,131",
	"LavenderBlush1=255,240,245",
	"LavenderBlush2=238,224,229",
	"LavenderBlush3=205,193,197",
	"LavenderBlush4=139,131,134",
	"MistyRose1=255,228,225",
	"MistyRose2=238,213,210",
	"MistyRose3=205,183,181",
	"MistyRose4=139,125,123",
	"azure1=240,255,255",
	"azure2=224,238,238",
	"azure3=193,205,205",
	"azure4=131,139,139",
	"SlateBlue1=131,111,255",
	"SlateBlue2=122,103,238",
	"SlateBlue3=105,89,205",
	"SlateBlue4=71,60,139",
	"RoyalBlue1=72,118,255",
	"RoyalBlue2=67,110,238",
	"RoyalBlue3=58,95,205",
	"RoyalBlue4=39,64,139",
	"blue1=0,0,255",
	"blue2=0,0,238",
	"blue3=0,0,205",
	"blue4=0,0,139",
	"DodgerBlue1=30,144,255",
	"DodgerBlue2=28,134,238",
	"DodgerBlue3=24,116,205",
	"DodgerBlue4=16,78,139",
	"SteelBlue1=99,184,255",
	"SteelBlue2=92,172,238",
	"SteelBlue3=79,148,205",
	"SteelBlue4=54,100,139",
	"DeepSkyBlue1=0,191,255",
	"DeepSkyBlue2=0,178,238",
	"DeepSkyBlue3=0,154,205",
	"DeepSkyBlue4=0,104,139",
	"SkyBlue1=135,206,255",
	"SkyBlue2=126,192,238",
	"SkyBlue3=108,166,205",
	"SkyBlue4=74,112,139",
	"LightSkyBlue1=176,226,255",
	"LightSkyBlue2=164,211,238",
	"LightSkyBlue3=141,182,205",
	"LightSkyBlue4=96,123,139",
	"SlateGray1=198,226,255",
	"SlateGray2=185,211,238",
	"SlateGray3=159,182,205",
	"SlateGray4=108,123,139",
	"LightSteelBlue1=202,225,255",
	"LightSteelBlue2=188,210,238",
	"LightSteelBlue3=162,181,205",
	"LightSteelBlue4=110,123,139",
	"LightBlue1=191,239,255",
	"LightBlue2=178,223,238",
	"LightBlue3=154,192,205",
	"LightBlue4=104,131,139",
	"LightCyan1=224,255,255",
	"LightCyan2=209,238,238",
	"LightCyan3=180,205,205",
	"LightCyan4=122,139,139",
	"PaleTurquoise1=187,255,255",
	"PaleTurquoise2=174,238,238",
	"PaleTurquoise3=150,205,205",
	"PaleTurquoise4=102,139,139",
	"CadetBlue1=152,245,255",
	"CadetBlue2=142,229,238",
	"CadetBlue3=122,197,205",
	"CadetBlue4=83,134,139",
	"turquoise1=0,245,255",
	"turquoise2=0,229,238",
	"turquoise3=0,197,205",
	"turquoise4=0,134,139",
	"cyan1=0,255,255",
	"cyan2=0,238,238",
	"cyan3=0,205,205",
	"cyan4=0,139,139",
	"DarkSlateGray1=151,255,255",
	"DarkSlateGray2=141,238,238",
	"DarkSlateGray3=121,205,205",
	"DarkSlateGray4=82,139,139",
	"aquamarine1=127,255,212",
	"aquamarine2=118,238,198",
	"aquamarine3=102,205,170",
	"aquamarine4=69,139,116",
	"DarkSeaGreen1=193,255,193",
	"DarkSeaGreen2=180,238,180",
	"DarkSeaGreen3=155,205,155",
	"DarkSeaGreen4=105,139,105",
	"SeaGreen1=84,255,159",
	"SeaGreen2=78,238,148",
	"SeaGreen3=67,205,128",
	"SeaGreen4=46,139,87",
	"PaleGreen1=154,255,154",
	"PaleGreen2=144,238,144",
	"PaleGreen3=124,205,124",
	"PaleGreen4=84,139,84",
	"SpringGreen1=0,255,127",
	"SpringGreen2=0,238,118",
	"SpringGreen3=0,205,102",
	"SpringGreen4=0,139,69",
	"green1=0,255,0",
	"green2=0,238,0",
	"green3=0,205,0",
	"green4=0,139,0",
	"chartreuse1=127,255,0",
	"chartreuse2=118,238,0",
	"chartreuse3=102,205,0",
	"chartreuse4=69,139,0",
	"OliveDrab1=192,255,62",
	"OliveDrab2=179,238,58",
	"OliveDrab3=154,205,50",
	"OliveDrab4=105,139,34",
	"DarkOliveGreen1=202,255,112",
	"DarkOliveGreen2=188,238,104",
	"DarkOliveGreen3=162,205,90",
	"DarkOliveGreen4=110,139,61",
	"khaki1=255,246,143",
	"khaki2=238,230,133",
	"khaki3=205,198,115",
	"khaki4=139,134,78",
	"LightGoldenrod1=255,236,139",
	"LightGoldenrod2=238,220,130",
	"LightGoldenrod3=205,190,112",
	"LightGoldenrod4=139,129,76",
	"LightYellow1=255,255,224",
	"LightYellow2=238,238,209",
	"LightYellow3=205,205,180",
	"LightYellow4=139,139,122",
	"yellow1=255,255,0",
	"yellow2=238,238,0",
	"yellow3=205,205,0",
	"yellow4=139,139,0",
	"gold1=255,215,0",
	"gold2=238,201,0",
	"gold3=205,173,0",
	"gold4=139,117,0",
	"goldenrod1=255,193,37",
	"goldenrod2=238,180,34",
	"goldenrod3=205,155,29",
	"goldenrod4=139,105,20",
	"DarkGoldenrod1=255,185,15",
	"DarkGoldenrod2=238,173,14",
	"DarkGoldenrod3=205,149,12",
	"DarkGoldenrod4=139,101,8",
	"RosyBrown1=255,193,193",
	"RosyBrown2=238,180,180",
	"RosyBrown3=205,155,155",
	"RosyBrown4=139,105,105",
	"IndianRed1=255,106,106",
	"IndianRed2=238,99,99",
	"IndianRed3=205,85,85",
	"IndianRed4=139,58,58",
	"sienna1=255,130,71",
	"sienna2=238,121,66",
	"sienna3=205,104,57",
	"sienna4=139,71,38",
	"burlywood1=255,211,155",
	"burlywood2=238,197,145",
	"burlywood3=205,170,125",
	"burlywood4=139,115,85",
	"wheat1=255,231,186",
	"wheat2=238,216,174",
	"wheat3=205,186,150",
	"wheat4=139,126,102",
	"tan1=255,165,79",
	"tan2=238,154,73",
	"tan3=205,133,63",
	"tan4=139,90,43",
	"chocolate1=255,127,36",
	"chocolate2=238,118,33",
	"chocolate3=205,102,29",
	"chocolate4=139,69,19",
	"firebrick1=255,48,48",
	"firebrick2=238,44,44",
	"firebrick3=205,38,38",
	"firebrick4=139,26,26",
	"brown1=255,64,64",
	"brown2=238,59,59",
	"brown3=205,51,51",
	"brown4=139,35,35",
	"salmon1=255,140,105",
	"salmon2=238,130,98",
	"salmon3=205,112,84",
	"salmon4=139,76,57",
	"LightSalmon1=255,160,122",
	"LightSalmon2=238,149,114",
	"LightSalmon3=205,129,98",
	"LightSalmon4=139,87,66",
	"orange1=255,165,0",
	"orange2=238,154,0",
	"orange3=205,133,0",
	"orange4=139,90,0",
	"DarkOrange1=255,127,0",
	"DarkOrange2=238,118,0",
	"DarkOrange3=205,102,0",
	"DarkOrange4=139,69,0",
	"coral1=255,114,86",
	"coral2=238,106,80",
	"coral3=205,91,69",
	"coral4=139,62,47",
	"tomato1=255,99,71",
	"tomato2=238,92,66",
	"tomato3=205,79,57",
	"tomato4=139,54,38",
	"OrangeRed1=255,69,0",
	"OrangeRed2=238,64,0",
	"OrangeRed3=205,55,0",
	"OrangeRed4=139,37,0",
	"red1=255,0,0",
	"red2=238,0,0",
	"red3=205,0,0",
	"red4=139,0,0",
	"DebianRed=215,7,81",
	"DeepPink1=255,20,147",
	"DeepPink2=238,18,137",
	"DeepPink3=205,16,118",
	"DeepPink4=139,10,80",
	"HotPink1=255,110,180",
	"HotPink2=238,106,167",
	"HotPink3=205,96,144",
	"HotPink4=139,58,98",
	"pink1=255,181,197",
	"pink2=238,169,184",
	"pink3=205,145,158",
	"pink4=139,99,108",
	"LightPink1=255,174,185",
	"LightPink2=238,162,173",
	"LightPink3=205,140,149",
	"LightPink4=139,95,101",
	"PaleVioletRed1=255,130,171",
	"PaleVioletRed2=238,121,159",
	"PaleVioletRed3=205,104,137",
	"PaleVioletRed4=139,71,93",
	"maroon1=255,52,179",
	"maroon2=238,48,167",
	"maroon3=205,41,144",
	"maroon4=139,28,98",
	"VioletRed1=255,62,150",
	"VioletRed2=238,58,140",
	"VioletRed3=205,50,120",
	"VioletRed4=139,34,82",
	"magenta1=255,0,255",
	"magenta2=238,0,238",
	"magenta3=205,0,205",
	"magenta4=139,0,139",
	"orchid1=255,131,250",
	"orchid2=238,122,233",
	"orchid3=205,105,201",
	"orchid4=139,71,137",
	"plum1=255,187,255",
	"plum2=238,174,238",
	"plum3=205,150,205",
	"plum4=139,102,139",
	"MediumOrchid1=224,102,255",
	"MediumOrchid2=209,95,238",
	"MediumOrchid3=180,82,205",
	"MediumOrchid4=122,55,139",
	"DarkOrchid1=191,62,255",
	"DarkOrchid2=178,58,238",
	"DarkOrchid3=154,50,205",
	"DarkOrchid4=104,34,139",
	"purple1=155,48,255",
	"purple2=145,44,238",
	"purple3=125,38,205",
	"purple4=85,26,139",
	"MediumPurple1=171,130,255",
	"MediumPurple2=159,121,238",
	"MediumPurple3=137,104,205",
	"MediumPurple4=93,71,139",
	"thistle1=255,225,255",
	"thistle2=238,210,238",
	"thistle3=205,181,205",
	"thistle4=139,123,139",
	"gray0=0,0,0",
	"grey0=0,0,0",
	"gray1=3,3,3",
	"grey1=3,3,3",
	"gray2=5,5,5",
	"grey2=5,5,5",
	"gray3=8,8,8",
	"grey3=8,8,8",
	"gray4=10,10,10",
	"grey4=10,10,10",
	"gray5=13,13,13",
	"grey5=13,13,13",
	"gray6=15,15,15",
	"grey6=15,15,15",
	"gray7=18,18,18",
	"grey7=18,18,18",
	"gray8=20,20,20",
	"grey8=20,20,20",
	"gray9=23,23,23",
	"grey9=23,23,23",
	"gray10=26,26,26",
	"grey10=26,26,26",
	"gray11=28,28,28",
	"grey11=28,28,28",
	"gray12=31,31,31",
	"grey12=31,31,31",
	"gray13=33,33,33",
	"grey13=33,33,33",
	"gray14=36,36,36",
	"grey14=36,36,36",
	"gray15=38,38,38",
	"grey15=38,38,38",
	"gray16=41,41,41",
	"grey16=41,41,41",
	"gray17=43,43,43",
	"grey17=43,43,43",
	"gray18=46,46,46",
	"grey18=46,46,46",
	"gray19=48,48,48",
	"grey19=48,48,48",
	"gray20=51,51,51",
	"grey20=51,51,51",
	"gray21=54,54,54",
	"grey21=54,54,54",
	"gray22=56,56,56",
	"grey22=56,56,56",
	"gray23=59,59,59",
	"grey23=59,59,59",
	"gray24=61,61,61",
	"grey24=61,61,61",
	"gray25=64,64,64",
	"grey25=64,64,64",
	"gray26=66,66,66",
	"grey26=66,66,66",
	"gray27=69,69,69",
	"grey27=69,69,69",
	"gray28=71,71,71",
	"grey28=71,71,71",
	"gray29=74,74,74",
	"grey29=74,74,74",
	"gray30=77,77,77",
	"grey30=77,77,77",
	"gray31=79,79,79",
	"grey31=79,79,79",
	"gray32=82,82,82",
	"grey32=82,82,82",
	"gray33=84,84,84",
	"grey33=84,84,84",
	"gray34=87,87,87",
	"grey34=87,87,87",
	"gray35=89,89,89",
	"grey35=89,89,89",
	"gray36=92,92,92",
	"grey36=92,92,92",
	"gray37=94,94,94",
	"grey37=94,94,94",
	"gray38=97,97,97",
	"grey38=97,97,97",
	"gray39=99,99,99",
	"grey39=99,99,99",
	"gray40=102,102,102",
	"grey40=102,102,102",
	"gray41=105,105,105",
	"grey41=105,105,105",
	"gray42=107,107,107",
	"grey42=107,107,107",
	"gray43=110,110,110",
	"grey43=110,110,110",
	"gray44=112,112,112",
	"grey44=112,112,112",
	"gray45=115,115,115",
	"grey45=115,115,115",
	"gray46=117,117,117",
	"grey46=117,117,117",
	"gray47=120,120,120",
	"grey47=120,120,120",
	"gray48=122,122,122",
	"grey48=122,122,122",
	"gray49=125,125,125",
	"grey49=125,125,125",
	"gray50=127,127,127",
	"grey50=127,127,127",
	"gray51=130,130,130",
	"grey51=130,130,130",
	"gray52=133,133,133",
	"grey52=133,133,133",
	"gray53=135,135,135",
	"grey53=135,135,135",
	"gray54=138,138,138",
	"grey54=138,138,138",
	"gray55=140,140,140",
	"grey55=140,140,140",
	"gray56=143,143,143",
	"grey56=143,143,143",
	"gray57=145,145,145",
	"grey57=145,145,145",
	"gray58=148,148,148",
	"grey58=148,148,148",
	"gray59=150,150,150",
	"grey59=150,150,150",
	"gray60=153,153,153",
	"grey60=153,153,153",
	"gray61=156,156,156",
	"grey61=156,156,156",
	"gray62=158,158,158",
	"grey62=158,158,158",
	"gray63=161,161,161",
	"grey63=161,161,161",
	"gray64=163,163,163",
	"grey64=163,163,163",
	"gray65=166,166,166",
	"grey65=166,166,166",
	"gray66=168,168,168",
	"grey66=168,168,168",
	"gray67=171,171,171",
	"grey67=171,171,171",
	"gray68=173,173,173",
	"grey68=173,173,173",
	"gray69=176,176,176",
	"grey69=176,176,176",
	"gray70=179,179,179",
	"grey70=179,179,179",
	"gray71=181,181,181",
	"grey71=181,181,181",
	"gray72=184,184,184",
	"grey72=184,184,184",
	"gray73=186,186,186",
	"grey73=186,186,186",
	"gray74=189,189,189",
	"grey74=189,189,189",
	"gray75=191,191,191",
	"grey75=191,191,191",
	"gray76=194,194,194",
	"grey76=194,194,194",
	"gray77=196,196,196",
	"grey77=196,196,196",
	"gray78=199,199,199",
	"grey78=199,199,199",
	"gray79=201,201,201",
	"grey79=201,201,201",
	"gray80=204,204,204",
	"grey80=204,204,204",
	"gray81=207,207,207",
	"grey81=207,207,207",
	"gray82=209,209,209",
	"grey82=209,209,209",
	"gray83=212,212,212",
	"grey83=212,212,212",
	"gray84=214,214,214",
	"grey84=214,214,214",
	"gray85=217,217,217",
	"grey85=217,217,217",
	"gray86=219,219,219",
	"grey86=219,219,219",
	"gray87=222,222,222",
	"grey87=222,222,222",
	"gray88=224,224,224",
	"grey88=224,224,224",
	"gray89=227,227,227",
	"grey89=227,227,227",
	"gray90=229,229,229",
	"grey90=229,229,229",
	"gray91=232,232,232",
	"grey91=232,232,232",
	"gray92=235,235,235",
	"grey92=235,235,235",
	"gray93=237,237,237",
	"grey93=237,237,237",
	"gray94=240,240,240",
	"grey94=240,240,240",
	"gray95=242,242,242",
	"grey95=242,242,242",
	"gray96=245,245,245",
	"grey96=245,245,245",
	"gray97=247,247,247",
	"grey97=247,247,247",
	"gray98=250,250,250",
	"grey98=250,250,250",
	"gray99=252,252,252",
	"grey99=252,252,252",
	"gray100=255,255,255",
	"grey100=255,255,255",
	"dark grey=169,169,169",
	"DarkGrey=169,169,169",
	"dark gray=169,169,169",
	"DarkGray=169,169,169",
	"dark blue=0,0,139",
	"DarkBlue=0,0,139",
	"dark cyan=0,139,139",
	"DarkCyan=0,139,139",
	"dark magenta=139,0,139",
	"DarkMagenta=139,0,139",
	"dark red=139,0,0",
	"DarkRed=139,0,0",
	"light green=144,238,144",
	"LightGreen=144,238,144",
);


##########################################
## OCR text fragments (words and pages) ##
##########################################

class TextWord {
	public $word;        # the word text (utf8)
	public $xMin;        # in mm
	public $yMin;        # in mm
	public $xMax;        # in mm
	public $yMax;        # in mm
	public $fontsize;    # in points
	public $spaceafter;  # true for last word in each line

	public function __construct($word, $xMin, $yMin, $xMax, $yMax,
			$fontsize, $spaceafter) {
		$this->word = $word;
		$this->xMin = $xMin;
		$this->yMin = $yMin;
		$this->xMax = $xMax;
		$this->yMax = $yMax;
		$this->fontsize = $fontsize;
		$this->spaceafter = $spaceafter;
	}
}

class TextPage {
	public $words;   # array of TextWord objects
	public $width;   # in mm
	public $height;  # in mm
	public $label;   # page number as defined in PDF, or false if not an int

	function __construct($words, $width, $height, $label) {
		$this->words = $words;
		$this->width = $width;
		$this->height = $height;
		$this->label = $label;
	}

	public function hasLabel() {
		return $this->label !== false;
	}

	public function getPaperType() {
		$epsilon = 2.0; // in mm
		if (abs($this->width - DINA4_H) < $epsilon && abs($this->height - DINA4_V) < $epsilon) {
			return 'A4 Portrait';
		} else if (abs($this->width - DINA4_V) < $epsilon && abs($this->height - DINA4_H) < $epsilon) {
			return 'A4 Landscape';
		} else if (abs($this->width - DINA5_H) < $epsilon && abs($this->height - DINA5_V) < $epsilon) {
			return 'A5 Portrait';
		} else if (abs($this->width - DINA5_V) < $epsilon && abs($this->height - DINA5_H) < $epsilon) {
			return 'A5 Landscape';
		} else {
			return 'Unknown';
		}
	}
}

function pointsToMillimeters($x) {
	return 0.352777778 * $x;
}

function textWordYxCompare($w1, $w2) {
	$y1 = (int) round(100 * $w1->yMin);
	$y2 = (int) round(100 * $w2->yMin);
	if ($y1 < $y2) return -1;
	else if ($y1 > $y2) return 1;

	$x1 = $w1->xMin;
	$x2 = $w2->xMin;
	if ($x1 < $x2) return -1;
	else if ($x1 > $x2) return 1;
	else return 0;
}


####################################
## Plagiarism highlighter classes ##
####################################

class HighlighterFigure {
	# It's always a polygon.
	private $points;
	private $xMin;
	private $yMin;
	private $xMax;
	private $yMax;

	public function __construct($points) {
		$this->points = $points;
		$this->xMin = 0;
		$this->yMin = 0;
		$this->xMax = 0;
		$this->yMax = 0;
		foreach (array_values($points) as $i => $point) {
			if ($i == 0) {
				$this->xMin = $point[0];
				$this->yMin = $point[1];
				$this->xMax = $point[0];
				$this->yMax = $point[1];
			} else {
				$this->xMin = min($this->xMin, $point[0]);
				$this->yMin = min($this->yMax, $point[1]);
				$this->xMax = max($this->xMax, $point[0]);
				$this->yMax = max($this->xMax, $point[1]);
			}
		}
	}

	public function getPoints() {
		return $this->points;
	}

	public function getLeft() {
		return $this->xMin;
	}

	public function getTop() {
		return $this->yMin;
	}

	public function getRight() {
		return $this->xMax;
	}

	public function getBottom() {
		return $this->yMax;
	}

	public function getWidth() {
		return $this->getRight() - $this->getLeft();
	}

	public function getHeight() {
		return $this->getBottom() - $this->getTop();
	}
}

abstract class Highlighter {
	abstract public function addWord($textword);
	abstract public function complete();

	private $figures;

	protected function __construct() {
		$this->figures = array();
	}

	protected function addFigure($figure) {
		$this->figures[] = $figure;
	}

	protected function addRectFigure($xMin, $yMin, $xMax, $yMax) {
		$this->figures[] = new HighlighterFigure(
			array(array($xMin, $yMin),
			      array($xMin, $yMax),
			      array($xMax, $yMax),
			      array($xMax, $yMin)));
	}

	public function getFigures() {
		return $this->figures;
	}

	public function getLeft() {
		$result = 0;
		foreach ($this->figures as $i => $figure) {
			if ($i == 0)
				$result = $figure->getLeft();
			else
				$result = min($result, $figure->getLeft());
		}
		return $result;
	}

	public function getTop() {
		$result = 0;
		foreach ($this->figures as $i => $figure) {
			if ($i == 0)
				$result = $figure->getTop();
			else
				$result = min($result, $figure->getTop());
		}
		return $result;
	}

	public function getRight() {
		$result = 0;
		foreach ($this->figures as $i => $figure) {
			if ($i == 0)
				$result = $figure->getRight();
			else
				$result = max($result, $figure->getRight());
		}
		return $result;
	}

	public function getBottom() {
		$result = 0;
		foreach ($this->figures as $i => $figure) {
			if ($i == 0)
				$result = $figure->getBottom();
			else
				$result = max($result, $figure->getBottom());
		}
		return $result;
	}

	public function getWidth() {
		return $this->getRight() - $this->getLeft();
	}

	public function getHeight() {
		return $this->getBottom() - $this->getTop();
	}
}

# This Highlighter implementation draws each word as a separate rectangle.
class WordHighlighter extends Highlighter {
	public function addWord($textword) {
		$this->addRectFigure(
			$textword->xMin, $textword->yMin,
			$textword->xMax, $textword->yMax);
	}

	public function complete() {
	}
}

# This Highlighter implementation combines all matching words into one rect.
class BoxHighlighter extends Highlighter {
	private $count;
	private $xMin;
	private $yMin;
	private $xMax;
	private $yMax;

	public function __construct() {
		$this->count = 0;
		$this->xMin = 0;
		$this->yMin = 0;
		$this->xMax = 0;
		$this->yMax = 0;
	}

	public function addWord($textword) {
		if ($this->count == 0) {
			$this->xMin = $textword->xMin;
			$this->yMin = $textword->yMin;
			$this->xMax = $textword->xMax;
			$this->yMax = $textword->yMax;
		} else {
			$this->xMin = min($this->xMin, $textword->xMin);
			$this->yMin = min($this->yMin, $textword->yMin);
			$this->xMax = max($this->xMax, $textword->xMax);
			$this->yMax = max($this->yMax, $textword->yMax);
		}
		$this->count++;
	}

	public function complete() {
		if ($this->count != 0) {
			$this->addRectFigure(
				$this->xMin, $this->yMin,
				$this->xMax, $this->yMax);
		}
	}
}

# This Highlighter tries to match the layout of the paragraph.
class ParagraphHighlighter extends Highlighter {
	private $count;
	private $linecount;
	private $xMin;
	private $yMin;
	private $xMax;
	private $yMax;
	private $xFirst;
	private $xLast;
	private $ySecondLineA;
	private $ySecondLineB;
	private $yPrevLineA;
	private $yPrevLineB;

	public function __construct() {
		$this->reset();
	}

	private function reset() {
		$this->count = 0;
		$this->linecount = 0;
		$this->xMin = 0;
		$this->yMin = 0;
		$this->xMax = 0;
		$this->yMax = 0;
		$this->xFirst = 0;
		$this->xLast = 0;
		$this->ySecondLineA = 0;
		$this->ySecondLineB = 0;
		$this->yPrevLineA = 0;
		$this->yPrevLineB = 0;
	}

	public function addWord($textword) {
		$xMin = $textword->xMin;
		$yMin = $textword->yMin;
		$xMax = $textword->xMax;
		$yMax = $textword->yMax;

		# assert we get words in top-down, left-right order
		$isNewLine = false;
		if ($this->count != 0) {
			$epsilon = 0.01;  // in mm
			assert($yMin >= $this->yMin - $epsilon);
			if ($yMin < $this->yMin) {
				$yMin = $this->yMin;
			} else if ($yMin > $this->yMax + $epsilon) {
				$isNewLine = true;
			} else {
				assert($xMin >= $this->xLast - $epsilon);
				if ($xMin < $this->xLast)
					$xMin = $this->xLast;
			}
		}
		if ($xMax < $xMin) $xMax = $xMin;
		if ($yMax < $yMin) $yMax = $yMin;

		# start a new paragraph when y distance is large enough
		# hint about the formula: 2*ym - yp == ym + (ym - yp)
		if ($this->count > 0 &&
		    $yMin >= 2 * $this->yMax - $this->yPrevLineB) {
			$this->complete();
		}

		if ($this->count == 0) {
			# initialize a new shape
			$this->count = 1;
			$this->linecount = 1;
			$this->xMin = $xMin;
			$this->yMin = $yMin;
			$this->xMax = $xMax;
			$this->yMax = $yMax;
			$this->xFirst = $xMin;
			$this->xLast = $xMax;
			$this->ySecondLineA = $yMax;
			$this->ySecondLineB = $yMax;
			$this->yPrevLineA = $yMin;
			$this->yPrevLineB = $yMin;
		} else {
			# add the word to an existing shape
			$this->count++;
			if ($isNewLine) {
				# add it to a new line of the existing shape
				$this->linecount++;
				if ($this->linecount == 2) {
					$this->ySecondLineA = $this->yMax;
					$this->ySecondLineB = $yMin;
				}
				$this->yPrevLineA = $this->yMax;
				$this->yPrevLineB = $yMin;
			}
			$this->xLast = $xMax;
			$this->xMin = min($this->xMin, $xMin);
			$this->yMin = min($this->yMin, $yMin);
			$this->xMax = max($this->xMax, $xMax);
			$this->yMax = max($this->yMax, $yMax);
		}
	}

	public function complete() {
		# produce better alignment when there are >= 2 lines
		if ($this->linecount >= 2) {
			$ySecondLine = 0.5 * ($this->ySecondLineA + $this->ySecondLineB);
			$yPrevLine = 0.5 * ($this->yPrevLineA + $this->yPrevLineB);
			$this->yMin -= max(0, $this->ySecondLineB - $ySecondLine);
			$this->yMax += max(0, $this->yPrevLineB - $yPrevLine);
		}

		if ($this->linecount == 0) {
			# no plagiarism here :(

		} else if ($this->linecount == 1) {
			# simple rectangular shape
			$this->addRectFigure(
				$this->xMin, $this->yMin,
				$this->xMax, $this->yMax);

		} else if ($this->linecount == 2 && $this->xLast < $this->xFirst) {
			# double rectangular shape, example:
			#                                       lorem ipsum
			# dolor sit amet
			$this->addRectFigure(
				$this->xFirst, $this->yMin,
				$this->xMax, $ySecondLine);
			$this->addRectFigure(
				$this->xMin, $ySecondLine,
				$this->xLast, $this->yMax);

		} else {
			# complex paragraph shape, example:
			#                             lorem ipsum dolor
			# sit amet, consectetur adipisicing elit
			$this->addFigure(new HighlighterFigure(
				array(array($this->xFirst, $this->yMin),
				      array($this->xFirst, $ySecondLine),
				      array($this->xMin, $ySecondLine),
				      array($this->xMin, $this->yMax),
				      array($this->xLast, $this->yMax),
				      array($this->xLast, $yPrevLine),
				      array($this->xMax, $yPrevLine),
				      array($this->xMax, $this->yMin))));
		}

		$this->reset();
	}
}


######################
## String functions ##
######################

function removeNeedleFootnotes($s) {
	if (preg_match("/^(.*?)\r?\n\r?\n\[(Fn\.?\s*)?[0-9]+\]/musi", $s, $match)) {
		return $match[1];
	} else {
		return $s;
	}
}

function removeTextInBrackets($s, $open, $close) {
	# Can't use preg_replace here because we need context-free matching.
	$result = '';
	$depth = 0;
	$pos = 0;
	while ($pos < strlen($s)) {
		$openpos = strpos($s, $open, $pos);
		$openpos_or_end = ($openpos === false) ? strlen($s) : $openpos;
		$closepos = strpos($s, $close, $pos);
		$closepos_or_end = ($closepos === false) ? strlen($s) : $closepos;
		if ($depth == 0) {
			$result .= substr($s, $pos,
				min($openpos_or_end, $closepos_or_end) - $pos);
		}
		if ($openpos === false && $closepos === false) {
			$pos = strlen($s);
		} else if ($openpos_or_end < $closepos_or_end) {
			$depth++;
			$pos = $openpos+1;
		} else {
			if ($depth > 0) $depth--;
			$pos = $closepos+1;
		}
	}
	return $result;
}

function splitWords($s) {
	# note the /u for unicode support
	return preg_split('/\W+/u', $s, -1, PREG_SPLIT_NO_EMPTY);
}


##########################################
## Text / fragment processing functions ##
##########################################

function parseTextPageFragments($filename) {
	$result = array();
	$xml = new SimpleXMLElement(file_get_contents($filename));
	for ($i = 0; isset($xml->pages->page[$i]); ++$i) {
		$xmlpage = $xml->pages->page[$i];

		if (is_numeric((string) $xmlpage['label'])) {
			$pagelabel = (int) $xmlpage['label'];
		} else {
			$pagelabel = false;
		}

		$pagewords = array();
		for ($j = 0; isset($xmlpage->word[$j]); ++$j) {
			$xmlword = $xmlpage->word[$j];
			$pagewords[] = new TextWord(
				(string) $xmlword,
				pointsToMillimeters((float) $xmlword['xMin']),
				pointsToMillimeters((float) $xmlword['yMin']),
				pointsToMillimeters((float) $xmlword['xMax']),
				pointsToMillimeters((float) $xmlword['yMax']),
				(float) $xmlword['fontsize'],
				($xmlword['spaceafter'] == 'true'));
		}

		usort($pagewords, 'textWordYxCompare');

		$result[] = new TextPage(
			$pagewords,
			pointsToMillimeters((float) $xmlpage['width']),
			pointsToMillimeters((float) $xmlpage['height']),
			$pagelabel);
	}
	return $result;
}

function cleanupTextPageFragments($textpages) {
	foreach ($textpages as $textpage) {
		# Combine words that pdftotext mistakenly reported as separate.
		for ($i = 0; $i < count($textpage->words) - 1;) {
			$word = $textpage->words[$i];
			$next = $textpage->words[$i+1];
			if ($word->spaceafter &&
			    abs($word->yMin - $next->yMin) < 0.1 &&
			    abs($word->yMax - $next->yMax) < 0.1 &&
			    abs($word->fontsize - $next->fontsize) < 0.1 &&
			    $next->xMin > $word->xMax &&
			    $next->xMin < $word->xMax + 0.05*$word->fontsize) {
				#print "Combining \"".$word->word."\" and \"".$next->word."\" on page ".$textpage->label."\n";
				$word->word .= $next->word;
				$word->xMax = $next->xMax;
				$word->spaceafter = $next->spaceafter;
				unset($textpage->words[$i+1]);
				$textpage->words = array_values($textpage->words);
			} else {
				++$i;
			}
		}
	}
}

function getPDFPageNums($textpages) {
	$result = array();
	foreach ($textpages as $i => $textpage) {
		if ($textpage->hasLabel())
			$result[$textpage->label] = $i;
	}
	return $result;
}

function getTextWordsXMax($textwords) {
	$result = 0;
	foreach ($textwords as $textword) {
		$result = max($result, $textword->xMax);
	}
	return $result;
}

function joinTextWords($textwords) {
	$result = '';
	$space = ' ';
	foreach ($textwords as $textword) {
		if ($result !== '') $result .= $space;
		$result .= $textword->word;
		$space = $textword->spaceafter ? ' ' : "\n";
	}
	return $result;
}

function filterTextWords($textwords, $only_footnotes) {
	$result = array();
	foreach ($textwords as $textword) {
		if (($textword->fontsize >= FOOTNOTE_THRESHOLD) ^ ($only_footnotes)) {
			$result[] = $textword;
		}
	}
	return $result;
}

function kochMehrinMustFilter($textpage) {
	return $textpage->label != 58 && $textpage->label != 59
	    && $textpage->label != 69;
}

function kochMehrinMustScale($textpage) {
	return $textpage->getPaperType() != "A5 Portrait";
}

function kochMehrinScale($textwords, $textpage) {
	$result = array();
	if ($textpage->label % 2 == 0) {
		$xshift = -39.5;
		$yshift = -52.0;
	} else {
		$xshift = -31.5;
		$yshift = -50.5;
	}
	foreach ($textwords as $textword) {
		$newtextword = clone $textword;
		$newtextword->xMin += $xshift;
		$newtextword->yMin += $yshift;
		$newtextword->xMax += $xshift;
		$newtextword->yMax += $yshift;
		$result[] = $newtextword;
	}
	return $result;
}

function longestCommonSubsequence($x, $y) {
	# Longest Common Subsequence algorithm
	# See http://www.algorithmist.com/index.php/Longest_Common_Subsequence

	# $x and $y must be arrays of strings; elements of these are considered
	# equal if their levenshtein distance is below LEVENSHTEIN_THRESHOLD

	# returns two lists of indices (into $x and $y, respectively)

	$n = count($x);
	$m = count($y);
	$table = array();

	for ($i = 0; $i <= $n; ++$i) {
		for ($j = 0; $j <= $m; ++$j) {
			if ($i == 0 || $j == 0) {
				$table[$i][$j] = 0;
			} else if (levenshtein($x[$i-1], $y[$j-1]) <= LEVENSHTEIN_THRESHOLD) {
				$table[$i][$j] = $table[$i-1][$j-1] + 1;
			} else {
				$table[$i][$j] = max($table[$i-1][$j], $table[$i][$j-1]);
			}
		}
	}

	$recon_x = array();
	$recon_y = array();
	$i = $n;
	$j = $m;
	$tablemax = $table[$n][$m];
	while ($i > 0 && $j > 0) {
		if (2*$table[$i][$j] < $tablemax && levenshtein($x[$i-1],$y[$j-1]) <= LEVENSHTEIN_THRESHOLD) {
			# When half the subsequence has been reconstructed,
			# combine words more aggressively.

			# This avoids cases likes:
			# $x: *a* text string with a *duplicate* *word*
			# $y: *a* *duplicate* *word*
			# Note that we want the second "a" in $x to be
			# combined with the first "a" in $y instead.

			$recon_x[] = $i-1;
			$recon_y[] = $j-1;
			$i--;
			$j--;

		} else if ($table[$i-1][$j] == $table[$i][$j]) {
			--$i;
		} else if ($table[$i][$j-1] == $table[$i][$j]) {
			--$j;
		} else {
			$recon_x[] = $i-1;
			$recon_y[] = $j-1;
			$i--;
			$j--;
		}
	}
	$recon_x = array_reverse($recon_x);
	$recon_y = array_reverse($recon_y);
	#print "recon_x: ".implode(" ",$recon_x)."\n";
	#print "recon_y: ".implode(" ",$recon_y)."\n";
	return array($recon_x, $recon_y);
}

function lookForSimilarText($textpage, $linestart, $lineend, $needle) {
	#print "-----------------------------------------------\n";

	# Remove unneeded text fragments from the haystack
	$haystack = $textpage->words;
	# FIXME: Koch-Mehrin.pdf is very broken, this code
	# handles the problem it somewhat...
	if (kochMehrinMustFilter($textpage)) {
		if ($linestart <= 100) {
			# Looking for non-footnotes, remove footnote words
			$haystack = filterTextWords($haystack, false);
		} else {
			# Looking only for footnotes, remove non-footnote words
			$haystack = filterTextWords($haystack, true);
		}
	}
	if (kochMehrinMustScale($textpage)) {
		$haystack = kochMehrinScale($haystack, $textpage);
	}
	#print joinTextWords($haystack)."\n";

	# Split text fragments into words and remember their indices
	$haystack_words = array();
	$haystack_wordtoindex_min = array();
	$haystack_wordtoindex_max = array();
	$haystack_joinwords = false;  # set to true when line ends with a hyphen
	foreach ($haystack as $wordindex => $textword) {
		if ($textword->yMin > PAGENUM_THRESHOLD
		    && $textword->fontsize > FOOTNOTE_THRESHOLD
		    && (int) $textword->word === $textpage->label) {
			# Assume this word is the page number. Ignore.
			continue;
		}
		foreach (splitWords($textword->word) as $textword_subword) {
			if ($haystack_joinwords) {
				$haystack_words[count($haystack_words)-1] .= $textword_subword;
				$haystack_wordtoindex_max[count($haystack_wordtoindex_max)-1] = $wordindex;
				$haystack_joinwords = false;
			} else {
				$haystack_words[] = $textword_subword;
				$haystack_wordtoindex_min[] = $wordindex;
				$haystack_wordtoindex_max[] = $wordindex;
			}
		}
		if (!$textword->spaceafter && preg_match('/-$/', $textword->word)) {
			$haystack_joinwords = true;
		}
	}

	# Remove text in angular or square brackets from the needle text
	if ($linestart <= 100 && $lineend <= 100) {
		$needle = removeNeedleFootnotes($needle);
	}
	$needle = removeTextInBrackets($needle, '[', ']');
	$needle = removeTextInBrackets($needle, '<', '>');

	# Split needle into words
	$needle_words = splitWords($needle);

	#print "Haystack: ".implode(" ",$haystack_words)."\n";
	#print "Needle: ".implode(" ",$needle_words)."\n";

	# Find longest common subsequence between haystack and needle
	list($recon_haystack, $recon_needle) = longestCommonSubsequence($haystack_words, $needle_words);
	if (2*count($recon_needle) < count($needle_words))
		return false;  // no (long enough) common subsequence found

	# Mark matching haystack fragments as being used
	foreach ($recon_haystack as $i) {
		for ($j = $haystack_wordtoindex_min[$i];
		     $j <= $haystack_wordtoindex_max[$i];
		     ++$j) {
			$haystack_fragused[$j] = $haystack[$j];
		}
	}

	# collect matching haystack fragments
	#$result = array();
	#foreach ($haystack as $wordindex => $textword) {
	#	if ($haystack_fragused[$wordindex])
	#		$result[] = $textword;
	#}
	$result = new ParagraphHighlighter();
	foreach ($haystack_fragused as $wordindex => $textword) {
		$result->addWord($textword);
	}
	$result->complete();

	#print "-----------------------------------------------\n";

	return $result;
}



##################
## Main program ##
##################

# Cache laden
if(!file_exists('cache')) {
	print "Fehler: Cache existiert nicht! 'make cache' ausgefuehrt?\n";
	exit(1);
}
$cache = unserialize(file_get_contents('cache'));

# Liste ignorierter Fragmente/Plagiatskategorien/Quellen anzeigen
foreach($cache['ignored']['fragments'] as $title) {
	print "%XXX: Ignoriere Fragment: $title\n";
}
foreach($cache['ignored']['fragmenttypes'] as $title) {
	print "%XXX: Ignoriere Plagiatskategorie: $title\n";
}
foreach($cache['ignored']['sources'] as $title) {
	print "%XXX: Ignoriere Quelle: $title\n";
}

# Liste der Quellen erzeugen
$cache_sources = array();
foreach($cache['sources'] as $source) {
	$source_color = $COLORMAP[count($cache_sources)];
	$source_color = preg_replace('/.*=/', '', $source_color);
	$source['color'] = $source_color;
	$cache_sources[$source['title']] = $source;
}

# Liste der Plagiatskategorien holen
$cache_fragtypes = array();
foreach($cache['fragmenttypes'] as $fragtype) {
	$cache_fragtypes[$fragtype['title']] = $fragtype;
}

# Textpositionen laden
if(!file_exists('Koch-Mehrin.xml')) {
	print "Fehler: Koch-Mehrin.xml existiert nicht!\n";
	exit(1);
}
$textpages = parseTextPageFragments("Koch-Mehrin.xml");
cleanupTextPageFragments($textpages);
$pdfpagenums = getPDFPageNums($textpages);

# Fragmente verarbeiten
$per_page_textblocks = array();
$used_sources = array();
foreach ($cache['fragments'] as $f) {
	$frag_wikititle = $f['wikiTitle'];
	print "Processing $frag_wikititle\n";

	if (preg_match('/^\s*(\d+)\s*$/', $f[1], $match)) {
		$frag_realpagenum = (int) $match[1];
	} else {
		print "Error: $frag_wikititle: Unable to parse page number!\n";
		continue;
	}
	if (preg_match('/^\s*(\d+)\s*$/', $f[2], $match)) {
		$frag_linestart = (int) $match[1];
		$frag_lineend = (int) $match[1];
	} else if (preg_match('/^\s*(\d+)\s*-\s*(\d+)\s*$/', $f[2], $match)) {
		$frag_linestart = (int) $match[1];
		$frag_lineend = (int) $match[2];
	} else {
		print "Error: $frag_wikititle: Unable to parse line numbers!\n";
		continue;
	}
	if ($frag_linestart > 100 ^ $frag_lineend > 100) {
		print "Error: $frag_wikititle: Line numbers span footnote boundary!\n";
		continue;
	}

	if ($frag_linestart == $frag_lineend) {
		$expected_wikititle = sprintf("Skm/Fragment %03d %02d",
			$frag_realpagenum, $frag_linestart);
	} else {
		$expected_wikititle = sprintf("Skm/Fragment %03d %02d-%02d",
			$frag_realpagenum, $frag_linestart, $frag_lineend);
	}
	if ($frag_wikititle != $expected_wikititle) {
		print "Warning: $frag_wikititle: wikititle seems wrong, expected: $expected_wikititle\n";
	}

	$frag_plagtext = $f[3];
	$frag_src_page = $f[4];
	$frag_src_line = $f[5];
	$frag_src_line = preg_replace('/^-*$/', '', $frag_src_line);

	$frag_types = array_values(array_intersect($f['categories'], array_keys($cache_fragtypes)));
	if(empty($frag_types)) {
		print "Warning: $frag_wikititle: No fragment type category found! (".implode(", ", $f['categories']).")\n";
	} else if(count($frag_types) >= 2) {
		print "Warning: $frag_wikititle: Multiple fragment type categories found! (".implode(", ", $f['categories']).")\n";
	}
	$frag_type_category = ($frag_types ? $frag_types[0] : '');
	$frag_type = preg_replace('/^Kategorie:/', '', $frag_type_category);
	if ($frag_type == 'Kein Plagiat' || $frag_type == 'Verdächtig') {
		#print "Warning: $frag_wikititle: Ignored, type = $frag_type\n";
		continue;
	}

	$frag_sources = array_values(array_intersect($f['categories'], array_keys($cache_sources)));

	if(empty($frag_sources)) {
		print "Warning: $frag_wikititle: No source category found! (".implode(", ", $f['categories']).")\n";
	} else if(count($frag_sources) >= 2) {
		print "Warning: $frag_wikititle: Multiple source categories found! (".implode(", ", $f['categories']).")\n";
	}

	$frag_source_category = ($frag_sources ? $frag_sources[0] : '');
	$frag_source = preg_replace('/^Kategorie:/', '', $frag_source_category);

	# find corresponding PDF page number
	if (!isset($pdfpagenums[$frag_realpagenum])) {
		print "Error: $frag_wikititle: page number $frag_realpagenum not found in PDF\n";
		continue;
	}
	$frag_pdfpagenum = $pdfpagenums[$frag_realpagenum];

	if (!isset($textpages[$frag_pdfpagenum])) {
		print "Error: $frag_wikititle: PDF page $frag_pdfpagenum does not contain OCR text fragments\n";
		continue;
	}

	# Find correspondences

	$correspondence = lookForSimilarText($textpages[$frag_pdfpagenum], $frag_linestart, $frag_lineend, $frag_plagtext);
	if ($correspondence === false || !$correspondence->getFigures()) {
		print "Error: $frag_wikititle: Unable to find correspondence!\n";
		continue;
	}

	# Create textblock that shows the original author
	$textblock_hpos = $correspondence->getRight() + 2;
	$textblock_vpos = $correspondence->getTop();
	$textblock_hsize = DINA5_H - $textblock_hpos;
	$textblock = sprintf("\\begin{textblock}{%d}(%d,%d)\n",
		$textblock_hsize, $textblock_hpos, $textblock_vpos);
	$textblock .= "\\fontsize{6}{7}\\selectfont\n";
	if ($frag_source != '') {
		$textblock .= "$frag_source\\\\\n";
	} else {
		$textblock .= "Unbekannte Quelle\\\\\n";
	}
	if ($frag_src_page != '') {
		if ($frag_src_line != '') {
			$textblock .= "S. $frag_src_page (Z. $frag_src_line)\\\\\n";
		} else {
			$textblock .= "S. $frag_src_page\\\\\n";
		}
	} else if ($frag_src_line != '') {
		$textblock .= "Z. $frag_src_line\\\\\n";
	}
	if ($frag_source != '') {
		$textblock .= "$frag_type\n";
	}
	$textblock .= "\\end{textblock}\n";
	$per_page_textblocks[$frag_pdfpagenum][] = $textblock;

	# Create colored highlights
	if (isset($cache_sources[$frag_source_category])) {
		$textblock_color = $cache_sources[$frag_source_category]['color'];
	} else {
		$textblock_color = '255,0,0';
	}
	$textblock_alpha = 0.3;
	foreach ($correspondence->getFigures() as $figure) {
		$textblock_hpos = $figure->getLeft();
		$textblock_hsize = $figure->getWidth();
		$textblock_vpos = $figure->getTop();
		$textblock_vsize = $figure->getHeight();

		$textblock = sprintf("\\begin{textblock}{%d}(%d,%d)\n",
			$textblock_hsize, $textblock_hpos, $textblock_vpos);
		$textblock .= "\\begin{tikzpicture}\n";
		$textblock .= sprintf("\\definecolor{fragcol}{RGB}{%s}\n", $textblock_color);
		$textblock .= sprintf("\\draw[fill=fragcol,opacity=%f] ", $textblock_alpha);
		foreach ($figure->getPoints() as $i => $point) {
			$textblock .= sprintf("(%.3f,%.3f) -- ", $point[0]/10.0, ($textblock_vpos+$textblock_vsize-$point[1])/10.0);
		}
		$textblock .= "cycle;\n";
		$textblock .= "\\end{tikzpicture}\n";
		$textblock .= "\\end{textblock}\n";
		$per_page_textblocks[$frag_pdfpagenum][] = $textblock;
	}

	# Remember which sources are referenced -- for the title page
	$frag_source_tilde = str_replace(' ', '~', $frag_source);
	if ($frag_source != '' && !in_array($frag_source_tilde, $used_sources))
		$used_sources[] = $frag_source_tilde;
}

# Add the title and subtitle textblock on page 1
$textblock_hpos = 8;
$textblock_hsize = DINA5_H - 2 * $textblock_hpos - 30;
$textblock_vpos = 23;
$textblock = sprintf("\\begin{textblock}{%d}(%d,%d)\n",
	$textblock_hsize, $textblock_hpos, $textblock_vpos);
sort($used_sources);
$textblock .= "\\fontsize{8}{9}\\selectfont\n";
$textblock .= "und: ".implode(', ', $used_sources)."\n";
$textblock .= "\\end{textblock}\n";
$per_page_textblocks[0][] = $textblock;

$textblock_hpos = 8;
$textblock_hsize = DINA5_H - 2 * $textblock_hpos - 30;
$textblock_vpos = 120;
$textblock = sprintf("\\begin{textblock}{%d}(%d,%d)\n",
	$textblock_hsize, $textblock_hpos, $textblock_vpos);
$textblock .= "\\center{\\Huge{}VroniPlag - Kritische Edition vom \\today}\n";
$textblock .= "\\end{textblock}\n";
$per_page_textblocks[0][] = $textblock;

# Write output to overlay-file.tex
$file = fopen("overlay-file.tex", "w");
fwrite($file, "\\documentclass[10pt,a5paper]{article}\n");
fwrite($file, "\\usepackage[ngerman]{babel}\n");
#fwrite($file, "\\usepackage[absolute,overlay,showboxes]{textpos}\n");
fwrite($file, "\\usepackage[absolute,overlay]{textpos}\n");
fwrite($file, "\\usepackage[T1]{fontenc}\n");
fwrite($file, "\\usepackage[utf8]{inputenc}\n");
fwrite($file, "\\usepackage[condensed,math]{iwona}\n");
fwrite($file, "\\usepackage{tikz}\n");
fwrite($file, "\\setlength{\\parindent}{0pt}\n");
fwrite($file, "\\setlength{\\TPHorizModule}{1mm}\n");
fwrite($file, "\\setlength{\\TPVertModule}{\\TPHorizModule}\n");
fwrite($file, "\\pagestyle{empty}\n");
fwrite($file, "\\begin{document}\n");

$max_pdfpagenum = max(array_keys($per_page_textblocks));
for ($pdfpagenum = 0; $pdfpagenum <= $max_pdfpagenum; ++$pdfpagenum) {
	if (isset($per_page_textblocks[$pdfpagenum])) {
		fwrite($file, implode('', $per_page_textblocks[$pdfpagenum]));
	}
	#if ($pdfpagenum != $max_pdfpagenum) {
		fwrite($file, "\\hphantom{1em}\\newpage");
	#}
}

fwrite($file, "\\hphantom{1em}\n");
fwrite($file, "\\end{document}\n");
fclose($file);
