<?php require_once('ConnDB.php'); ?>
<?php require_once('DBB.php'); ?>
<?php

$rmk=""; 
if(isset($_REQUEST['rmk'])){
	$rmk = $_REQUEST['rmk'];
}


/*$categry = array(
        "000" => "Computer science, information & general works",
        "001"  => "Knowledge",
        "002"  =>  "The book (writing, libraries, and book-related topics)",
        "003"  =>  "Systems",
        "004"  => "Data processing & computer science",
        "005"  =>  "Computer programming, programs & data",
        "006"  =>  "Special computer methods",
        "007–009"  => "[Unassigned]",
    "010"  => "Bibliographies",
        "011"  => "Bibliographies",
        "012"  => "Bibliographies of individuals",
        "013"  => "[Unassigned]",
        "014"  => "Bibliographies of anonymous & pseudonymous works",
        "015"  => "Bibliographies of works from specific places",
        "016"  => "Bibliographies of works on specific subjects",
        "017"  => "General subject catalogs",
        "018"  => "Catalogs arranged by author, date, etc.",
        "019"  => "Dictionary catalogs",
    "020"  =>  "Library & information sciences",
        "021"  => "Library relationships (with archives, information centers, etc.)",
        "022"  =>  "Administration of physical plant",
        "023"  => "Personnel management",
        "024"  => "[Unassigned]",
        "025"  =>  "Library operations",
        "026"  => "Libraries for specific subjects",
        "027"  => "General libraries",
        "028"  => "Reading & use of other information media",
        "029"  => "[Unassigned]",
    "030"  =>  "Encyclopedias & books of facts",
        "030"  =>  "General encyclopedic works",
        "031"  => "Encyclopedias in American 'English",
        "032"  =>  "Encyclopedias in English",
        "033"  => "Encyclopedias in other Germanic languages",
        "034"  => "Encyclopedias in French, Occitan, and 'Catalan",
        "035"  => "Encyclopedias in Italian, Romanian, and related languages",
        "036"  => "Encyclopedias in 'Spanish & Portuguese",
        "037"  => "Encyclopedias in 'Slavic languages",
        "038"  => "Encyclopedias in 'Scandinavian languages",
        "039"  => "Encyclopedias in other languages",
    "040"  =>  "Unassigned (formerly Biographies)",
    "050"  => "Magazines, journals & serials",
        "050"  => "General serial publications",
        "051"  =>  "Serials in American English",
        "052"  => "Serials in English",
        "053" => "Serials in other Germanic languages",
        "054"  => "Serials in French, Occitan, and Catalan",
        "055" =>  "Serials in Italian, Romanian, and related languages",
        "056" =>  "Serials in Spanish & Portuguese",
        "057"  => "Serials in Slavic languages",
        "058"  => "Serials in Scandinavian languages",
        "059"  => "Serials in other languages",
    "060" => "Associations, organizations & museums",
        "060"  => "General organizations & museum science",
        "061" => "Organizations in North America",
        "062" => "Organizations in British Isles; in England",
        "063" => "Organizations in central Europe; in Germany",
        "064" => "Organizations in France & Monaco",
        "065" => "Organizations in Italy & adjacent islands",
        "066" => "Organizations in Iberian peninsula & adjacent islands",
        "067" => "Organizations in eastern Europe; in Russia",
        "068" => "Organizations in other geographic areas",
        "069"  => "Museum science",
    "070"  => "News media, journalism & publishing",
        "070"  => "News media, journalism, and publishing",
        "071"  => "Newspapers in  => North America",
        "072"  => "Newspapers in British Isles; in England",
        "073" => "Newspapers in central Europe; in Germany",
        "074"  => "Newspapers in France & Monaco",
        "075"  => "Newspapers in Italy & adjacent islands",
        "076"  => "Newspapers in Iberian peninsula & adjacent islands",
        "077"  => "Newspapers in eastern Europe; in Russia",
        "078"  => "Newspapers in Scandinavia",
        "079"  => "Newspapers in other geographic areas",
    "080" => "Quotations",
        "080"  => "General collections",
        "081"  => "Collections in American English",
        "082"  => "Collections in English",
        "083" => "Collections in other Germanic languages",
        "084"  => "Collections in French,""Occitan, Catalan",
        "085"  => "Collections in Italian, Romanian, & related languages",
        "086"  => "Collections in Spanish & Portuguese",
        "087"  => "Collections in Slavic languages",
        "088"  => "Collections in Scandinavian languages",
        "089"  => "Collections in other languages",
    "090"  => "Manuscripts & rare books",
        "090"  => "Manuscripts and rare books",
        "091"  => "Manuscripts",
        "092"  => "Block books",
        "093" => "Incunabula",
        "094"  => "Printed books",
        "095" => "Books notable for bindings",
        "096"  => "Books notable for illustrations",
        "097"  => "Books notable for ownership or origin",
        "098"  => "Prohibited works, forgeries, and hoaxes",
        "099"  => "Books notable for format",

  "100"  => "Philosophy & psychology",

        "101"  => "Theory of philosophy",
        "102"  => "Miscellany",
        "103" => "Dictionaries & encyclopedias",
        "104"  => "[Unassigned]",
        "105" =>  "Serial publications",
        "106" => "Organizations & management",
        "107"  => "Education, research, related topics of philosophy",
        "108"  => "Groups of people",
        "109"  => "History & collected biography",
    "110"  => "Metaphysics",
        "111" => "Ontology",
        "112"  => "No longer used—formerly Methodology",
        "113" => "Cosmology ( Philosophyof nature)",
        "114"  => "Space",
        "115"  => "Time",
        "116"  => "Change",
        "117"  => "Structure",
        "118"  => "Force and energy",
        "119"  => "Number and quantity",
    "120"  => "Epistemology",
        "120"  => "Epistemology, causation, and humankind",
        "121"  =>  "Epistemology ( Theory of knowledge)",
        "122"  => "Causation",
        "123"  => "Determinism and indeterminism",
        "124" => "Teleology",
        "125"  => "No longer used—formerly  Infinity",
        "126" =>  "The self",
        "127" => "The unconscious & the subconscious",
        "128" => "Humankind",
        "129" => "Origin & destiny of individual souls",
    "130" => "Parapsychology & occultism",
        "130" => "Parapsychology & occultism",
        "131"  =>  "Parapsychological and occult methods for achieving well-being, happiness, success",
        "132"  => "No longer used—formerlyMental derangements",
        "133"  => "Specific topics in parapsychology & occultism",
        "134" => "No longer used—formerly  Mesmerism & Clairvoyance",
        "135"  => "Dreams & mysteries",
        "136"  => "No longer used—formerlyMental characteristics",
        "137"  => "Divinatory graphology",
        "138"  => "Physiognomy",
        "139"  => "Phrenology",
    "140" => "Philosophical schools of thought",
        "140" => "Specific philosophical schools and viewpoints",
        "141"  =>  "Idealism & related systems & doctrines",
        "142"  => "Critical philosophy",
        "143" => "Bergsonism & intuitionism",
        "144" => "Humanism & related systems & doctrines",
        "145"  => "Sensationalism",
        "146" =>  "Naturalism & related systems & doctrines",
        "147" => "Pantheism & related systems & doctrines",
        "148" => "Dogmatism, eclecticism, liberalism, syncretism, & traditionalism",
        "149" => "Other philosophical systems & doctrines",
    "150" => "Psychology",
 
        "151"  =>  "No longer used—formerly Intellect",
        "152"  => "Sensory perception, movement, emotions, & physiological drives",
        "153" => "Conscious mental processes & intelligence",
        "154"  => "Subconscious & altered states & processes",
        "155"  => "Differential & developmental psychology",
        "156"  => "Comparative psychology",
        "157"  => "No longer used—formerly  Emotions",
        "158" => "Applied psychology",
        "159"  => "No longer used—formerly Will ",
    "160" => "Philosophical logic",
        "160" => "Philosophical logic",
        "161"  =>  "Induction",
        "162"  => "Deduction",
        "163–164"  => "Not assigned or no longer used",
        "165" => "Fallacies & sources of error",
        "166"  => "Syllogisms",
        "167"  => "Hypotheses",
        "168" => "Argument & persuasion",
        "169" "Analogy",
    "170" => "Ethics",
     
        "171"  => "Ethical systems",
        "172"  => "Political ethics",
        "173" => "Ethics of family relationships",
        "174" => "Occupational ethics",
        "175" => "Ethics of recreation, leisure, public performances, communication",
        "176" =>  "Ethics of sex & reproduction",
        "177"  => "Ethics of social relations",
        "178" => "Ethics of consumption",
        "179" => "Other ethical norms",
  
        "180" => "Ancient, medieval, eastern philosophy",
        "181"  => "Eastern philosophy",
        "182"  => "Pre- Socratic  Greek philosophies",
        "183" => "Sophistic,  Socratic, related  Greek philosophies",
        "184"  => "Platonic philosophy",
        "185" => "Aristotelian philosophy",
        "186" =>  "Skeptic &  => Neoplatonic philosophies",
        "187" => "Epicurean philosophy",
        "188" => "Stoic philosophy",
        "189"  => "Medieval Western philosophy",
    "190"=> "Modern Western philosophy (19th-century, 20th-century)",
        "190"=> "Modern Western & other noneastern philosophy",
        "191"  => "Philosophyof the United  States and  Canada",
        "192"  => "Philosophyof the British  Isles",
        "193" => "Philosophyof Germany and Austria",
        "194"  => "Philosophyof  France",
        "195" => "Philosophyof Italy",
        "196" => "Philosophyof  Spain and Italy",
        "197" => "Philosophyof Russia",
        "198" => "Philosophyof Scandinavia &  Finland",
        "199"  => "Philosophyin other geographic areas",

 => "200" => – "Religion",

        "200" => "Religion",
        "201" =>"Religious mythology, general classes of religion, interreligious relations and attitudes, social theology",
        "202" =>"Doctrines",
        "203" => "Public worship and other practices",
        "204" => "Religious experience, life, practice",
        "205" =>"Religious ethics",
        "206" =>"Leaders and organization",
        "207" => "Missions and religious education",
        "208" => "Sources",
        "209" => "Sects and reform movements",
    "210" =>"Philosophy& theory of religion",
        "210" =>"Philosophy& theory of religion",
        "211" => "Concepts of  God",
        "212"  => "Existence, ways of knowing  God, attributes of  God",
        "213" => "Creation",
        "214" => "Theodicy",
        "215"=> "Science & religion",
        "216" =>  "No longer used—formerly  Evil",
        "217" => "No longer used—formerly Prayer",
        "218"=> "Humankind",
        "219" => "No longer used—formerly Analogies",
    "220" =>"The  Bible",
        
        "221" => "Old  Testament (Tanakh)",
        "222" =>"Historical books of Old  Testament",
        "223"  => "Poetic books of" => "Old  Testament",
        "224" => "Prophetic books of Old  Testament",
        "225" =>"New  Testament",
        "226" =>  "Gospels & Acts",
        "227" => "Epistles",
        "228" => "Revelation (Apocalypse)",
        "229" => "Apocrypha, pseudepigrapha, & intertestamental works",
    "230"=> "Christianity",
        "230"=> "Christianity",
        "231"  =>  "God",
        "232" => "Jesus Christ & his family",
        "233"  => "Humankind",
        "234" => "Salvation & grace",
        "235" =>"Spiritual beings",
        "236"  => "Eschatology",
        "237"  => "No longer used—formerly  Future state",
        "238" => "Creeds, confessions of faith, covenants, & catechisms",
        "239" => "Apologetics & polemics",
    "240"=> "Christian practice & observance
        "240"=> "Christian moral and devotional theology",
        "241"  =>  "Christian ethics",
        "242" =>"Devotional literature",
        "243" =>"Evangelistic writings for individuals and families",
        "244" => "No longer used—formerly Religious fiction",
        "245" =>"No longer used—formerly Hymnology",
        "246" => "Use of art in Christianity",
        "247" => "Church furnishings & related articles",
        "248"=> "Christian experience, practice, life",
        "249" => "Christian observances in family life",
    "250"=> "Christian orders & local church
        "250" => "Local Christian church and Christian religious orders",
        "251"  =>  "Preaching (Homiletics)",
        "252" => "Texts of sermons",
        "253"=>"Pastoral office and work (Pastoral theology)",
        "254"  => "Parish administration",
        "255" => "Religious congregations & orders",
        "256"  => "No longer used—formerly Religious societies",
        "257"  => "No longer used—formerly Parochial schools, libraries, etc.",
        "258" => "No longer used—formerly Parochial medicine",
        "259"  => "Pastoral care of families, of specific groups of people",
    "260"=> "Social & ecclesiastical theology
        "260" => "Christian social and ecclesiastical theology",
        "261"  =>  "Social theology and interreligious relations and attitudes",
        "262" => "Ecclesiology",
        "263" => "Days, times, places of religious observance",
        "264"  => "Public worship",
        "265"=> "Sacraments, other rites & acts",
        "266"  => "Missions",
        "267" => "Associations for religious work",
        "268" => "Religious education",
        "269"  => "Spiritual renewal",
    "270"=> "History of Christianity",
        "270"=> "History, geographic treatment, biography of Christianity",
        "271" => "Religious congregations and orders in church history",
        "272"=>"Persecutions in church history",
        "273" => "Doctrinal controversies and heresies in general church history",
        "274" =>"Christianity in Europe",
        "275"=> "Christianity in Asia",
        "276" =>  "Christianity in Africa",
        "277" =>"Christianity in North America",
        "278"=>"Christianity in South America",
        "279"  => "History of Christianity in other areas",
    280"=> "Christian denominations
        280"=> "Denominations and sects of  => "Christian church
        281"  => "Early church &  => "Eastern churches
        282 "Roman  => "Catholic  => "Church
        283""Anglican churches
        284"  => "=> "Protestant denominations of  => "Continental origin & related body
        285"=> "=> "Presbyterian churches, "Reformed churches centered in America,  => "Congregational churches
        286" =>  "Baptist, "Restoration  => "Movement, "Adventist churches
        287" => "Methodist churches; churches related to  => "Methodism
        288" => "No longer used—formerly "Unitarian
        289" => "Other denominations & sects
    290"" => "Other religions
        290"" => "Other religions
        291"  => "No longer used—formerly  => "Comparative religion
        292" => "Classical religion ( Greek & "Roman religion)
        293 => "Germanic religion
        294" => "Religions of  => "Indic origin
        295 Zoroastrianism ( => "Mazdaism,  => "=> "Parseeism)
        296 "Judaism
        297" => "Islam,  => "Bábism &  => "Bahá'í  => "Faith
        298"=> "No longer used—formerly  => "Mormonism
        299" => "Religions not provided for elsewhere

 => "Class 30"0" => –  => "Social sciences

    30"0"=> "Social sciences, sociology & anthropology
        30"0"=> "Social sciences
        301"  =>  "Sociology & anthropology
        302" =>"Social interaction
        303" =>"Social processes
        30"4"  => "Factors affecting social behavior
        30"5"=> "Groups of people
        30"6" =>  "Culture & institutions
        307" => "Communities
        308" => "No longer used—formerly  => "=> "Polygraphy
        309" => "No longer used—formerly  => "History of sociology
    3"10"=> "Statistics
        3"10"=> "Collections of general statistics
        311" =>  "No longer used—formerly  Theory and methods
        3"12" => "No longer used—formerly  => "=> "Population
        313" => "No longer used—formerly  => "Special topics
        3"14" => "General statistics of Europe
        3"15"=> "General statistics of "Asia
        3"16" =>  "General statistics of "Africa
        3"17" => "General statistics of  => North America
        3"18"=> "General statistics of  => "South America
        3"19" => "General statistics of "Australasia,  => "=> "Pacific" => "Ocean islands, "Atlantic" => "Ocean islands, "Arctic islands, "Antarctica
    3"20" =>"=> "Political science
        3"20" =>"=> "Political science ( => "=> "Politics & government)
        3"21"  =>  "Systems of governments & states
        3"22 "Relation of state to organized groups & their members
        3"23"  => "Civil & political rights
        3"24 => "The political process
        3"25" =>"International migration & colonization
        3"26" =>  "Slavery & emancipation
        3"27" => "International relations
        328"=> "The legislative process
        329" => "Not assigned or no longer used
    330"=> "Economics
        330"=> "Economics
        331" =>"Labor economics
        332" => "Financial economics
        333"  => "Economics of land & energy
        334" => "Cooperatives
        335" =>"Socialism & related systems
        336"  => "=> "Public finance
        337"  => "International economics
        338"=>"Production
        339"  => "Macroeconomics & related topics
    340" => "Law
        340" => "Law
        3"41 "Law of nations
        3"42" =>"Constitutional & administrative law
        3"43" =>"Military, defense, public property, public finance, tax, commerce (trade), industrial law
        34"4"" => "Labor, social service, education, cultural law
        34"5" =>"Criminal law
        346" =>  "=> "Private law
        347"=>"Procedure & courts
        348" => "Laws, regulations, cases
        349" =>Law of specific jurisdictions, areas, socioeconomic regions, regional intergovernmental organizations
    350"=> "=> "Public administration & military science
        350"=> "=> "Public administration & military science
        351"  =>  "=> "Public administration
        352" => "General considerations of public administration
        353" => "Specific fields of public administration
        354"  => "=> "Public administration of economy & environment
        355" =>"Military science
        356"  => "Foot forces & warfare
        357"  => "Mounted forces & warfare
        358" => "Air & other specialized forces & warfare; engineering & related services
        359"  => "Sea forces & warfare
    360"=> "Social problems & social services
        360"=> "Social problems & services; associations
        361"  =>  "Social problems & services
        362" => "Social problems of & services to groups of people
        363" => "Other social problems & services
        364"  => "Criminology
        365"=> "=> "Penal & related institutions
        366"  => "Secret associations & societies
        367"  => "General clubs
        368" => "Insurance
        369" => "Associations
    370"=> "Education
        370"=> "Education
        371"  => "Schools & their activities; special education
        372"=>"Primary education (elementary education)
        373" => "Secondary education
        374" => "Adult education
        375"=> "Curricula
        376" =>  "No longer used—formerly  => "Education of women
        377"  => "No longer used—formerly  => "Ethical education
        378" => "Higher education ( => "Tertiary education)
        379"  => "=> "Public policy issues in education
    380"=> "Commerce, communications, & transportation
        380"=> "Commerce, communications, transportation
        381"  => "Commerce ( => "Trade)
        382" => "International commerce ( => "Foreign trade)
        383"=>"Postal communication
        384"  => "Communications
        385 "Railroad transportation
        386" =>  "Inland waterway & ferry transportation
        387 Water, air, space transportation
        388" => "Transportation
        389"  => "Metrology & standardization
    390"=> "Customs, etiquette, & folklore
        390"=> "Customs, etiquette, folklore
        391"  => "Costume & personal appearance
        392" => "Customs of life cycle & domestic life
        393" => "Death customs
        394"  => "General customs
        395"=> "Etiquette ( => "Manners)
        396" =>  "No longer used—formerly Women's position and treatment
        397" => "No longer used—formerly outcast studies
        398"=> "Folklore
        399"  => "Customs of war & diplomacy

 => "Class 400" => – "Language

    400" => "Language
        400" => "Language
        40"1  => "Philosophy& theory; international languages
        402" =>"Miscellany
        403" =>"Dictionaries, encyclopedias, concordances
        40"4"  => "Special topics of language
        40"5"=> "Serial publications
        40"6" => "Organizations & management
        407" => "Education, research, related topics
        408" => "Groups of people
        409" => "Geographic treatment & biography
    410" => "Linguistics
        410" => "Linguistics
        41"1" Writing systems of standard forms of languages
        412" => "Etymology of standard forms of languages
        4"13" => "Dictionaries of standard forms of languages
        4""14"=>"Phonology & phonetics of standard forms of languages
        4""15"=> "Grammar of standard forms of languages
        4""16" =>  "No longer used—formerly  => "=> "Prosody
        4""17" => "Dialectology & historical linguistics
        4""18"=> "Standard usage ( => "=> "Prescriptive linguistics)
        4""19" => "Sign languages
    4""20" => English &" => "Old English languages
        4""20" => English &" => "Old English ("Anglo- => "Saxon)
        4""21 Writing system, phonology, phonetics of standard English
        4"22" =>"Etymology of standard English
        4""23"  => "Dictionaries of standard English
        4""24 => "No longer used—formerly English thesauruses
        4""25" =>"Grammar of standard English
        4""26" =>  "No longer used—formerly English prosodies
        4""27" => "Historical & geographical variations, modern nongeographic variations of English
        4"28"=> "Standard English usage ( => "=> "Prescriptive linguistics)
        4"29" => "Old English ("Anglo- => "Saxon)
    4"30"=> "German & related languages
        4"30"=> "German and related languages
        4"3"1 Writing systems, phonology, phonetics of standard  => "German
        4"32" => "Etymology of standard  => "German
        4"33"  => "Dictionaries of standard  => "German
        4"34" => "Not assigned or no longer used
        4"35" =>"Grammar of standard  => "German
        4"36"  => "Not assigned or no longer used
        4"37"  => "Historical & geographic variations, modern nongeographic variations of  => "German
        4"38" => "Standard  => "German usage ( => "=> "Prescriptive linguistics)
        4"39" => "Other Germanic languages
    4"40"=> "French & related languages
        4"40"=> "French & related "Romance languages
        4""41 Writing systems, phonology, phonetics of standard  => "French
        4""42" =>"Etymology of standard  => "French
        4""43" =>"Dictionaries of standard  => "French
        4"4"4" => "Not assigned or no longer used
        4"4"5" =>"Grammar of standard  => "French
        4"46" =>  "Not assigned or no longer used
        4"47" => "Historical and geographic variations, modern nongeographic variations of  => "French
        4"48"=> "Standard  => "French usage ( => "=> "Prescriptive linguistics)
        4"49" => "Occitan Catalan,  => "Franco- => "=> "Provençal
    4"50"=> "Italian, Romanian, & related languages
        4"50"=> "Italian,  => "Dalmatian, Romanian, "Rhaetian,  => "Sardinian,  => "Corsican
        4"5"1 Writing systems, phonology, phonetics of standard  => "Italian
        4"52" => "Etymology of standard  => "Italian
        4"53" => "Dictionaries of standard  => "Italian
        4"54"  => "Not assigned or no longer used
        4"55" =>"Grammar of standard  => "Italian
        4"56"  => "Not assigned or no longer used
        4"57"  => "Historical & geographic variations, modern nongeographic variations of  => "Italian
        4"58" => "Standard  => "Italian usage ( => "=> "Prescriptive linguistics)
        4"59" Romanian, "Rhaetian,  => "Sardinian,  => "Corsican
    460" => Spanish, => "Portuguese,  => "Galician
        460" => Spanish, => "Portuguese,  => "Galician
        4"6"1 Writing systems, phonology, phonetics of standard Spanish
        4"62" => "Etymology of standard Spanish
        4"63" => "Dictionaries of standard Spanish
        4"64"  => "Not assigned or no longer used
        4"65"=> "Grammar of standard Spanish
        466"  => "Not assigned or no longer used
        467"  => "Historical & geographic variations, modern nongeographic variations of Spanish
        468" => "Standard Spanish usage ( => "=> "Prescriptive linguistics)
        469" => "Portuguese
    470" => "Latin &  => "Italic languages
        470" => "Latin & related  => "Italic languages
        471" Writing systems, phonology, phonetics of classical "Latin
        4"72" => "Etymology of classical "Latin
        4"73" => "Dictionaries of classical "Latin
        4"74"  => "Not assigned or no longer used
        4"75"=> "Grammar of classical "Latin
        4"76" =>  "Not assigned or no longer used
        477"" => "Old, postclassical, Vulgar "Latin
        478" => "Classical "Latin usage ( => "=> "Prescriptive linguistics)
        479" => "Other  => "Italic languages
    480"=> "Classical & modern  Greek languages
        480"=> "Classical  Greek & related  => "Hellenic languages
        481" Writing systems, phonology, phonetics of classical  Greek
        4"82" => "Etymology of classical  Greek
        4"83" => "Dictionaries of classical  Greek
        4"84"  => "Not assigned or no longer used
        4"85"=> "Grammar of classical  Greek
        4"86" =>  "Not assigned or no longer used
        4"87"=>"Preclassical & postclassical  Greek
        488" => "Classical  Greek usage ( => "=> "Prescriptive linguistics)
        489" => "Other  => "Hellenic languages
    490"" => "Other languages
        490"" => "Other languages
        491"  => "East  => "Indo-European &  => "Celtic languages
        4"92 "Afro-"Asiatic languages
        4"93" => "Non- => "Semitic "Afro-"Asiatic languages
        4"94" => "Altic, "Uralic,  => "Hyperborean,  => "Dravidian languages, miscellaneous languages of south "Asia
        4"95 "Languages of  => "East &  => "Southeast "Asia
        4"96 "African languages
        4"97" => North American native languages
        4"98"=> "South American native languages
        499"  => "Non-"Austronesian languages of" => "Oceania, "Austronesian languages, miscellaneous languages

 => "Class 50"0" => –  => "Science

    50"0"=> "Science
        50"0"=> "Natural sciences & mathematics
        50"1  => "Philosophy& theory
        502" =>"Miscellany
        503" =>"Dictionaries, encyclopedias, concordances
        50"4"  => "Not assigned or no longer used
        50"5"=> "Serial publications
        50"6" => "Organizations & management
        507" => "Education, research, related topics
        508" => "Natural history
        509" => "History, geographic treatment, biography
    5"10"=> "Mathematics
        5"10"=> "Mathematics
        511" =>  "General principles of mathematics
        5"12 "Algebra
        5"13"Arithmetic
        5"14" => "Topology
        5"15 "Analysis
        5"16" =>  "Geometry
        5"17" => "Not assigned or no longer used
        5"18"=> "Numerical analysis
        5"19"=>"Probabilities & applied mathematics
    5"20" => "Astronomy
        5"20" => "Astronomy & allied sciences
        5"21"  =>  "Celestial mechanics
        522" =>"Techniques, procedures, apparatus, equipment, materials
        5"23"  => "Specific celestial bodies & phenomena
        5"24 => "Not assigned or no longer used
        5"25" =>"Earth ("Astronomical geography)
        5"26" =>  "Mathematical geography
        5"27" => "Celestial navigation
        528"=> "Ephemerides
        529" => "Chronology
    530"=> "=> "Physics
        530"=> "=> "Physics
        531"  =>  "Classical mechanics
        532" => "Fluid mechanics
        533"  => "=> "Pneumatics ( => "Gas mechanics)
        534" => "Sound & related vibrations
        535" => "Light & related radiation
        536"  => "Heat
        537"  => "Electricity & electronics
        538" => "Magnetism
        539"  => "Modern physics
    540"=> "Chemistry
        540"=> "Chemistry & allied sciences
        5"41"  =>  "=> "Physical chemistry
        5"42" =>"Techniques, procedures, apparatus, equipment, materials
        5"4"3""Analytical chemistry
        54"4" => "No longer used—formerly => "Qualitative analysis
        54"5" =>"No longer used—formerly => "Quantitative analysis
        546" =>  "Inorganic chemistry
        547" => "Organic chemistry
        548"=> "Crystallography
        549" => "Mineralogy
    550"=> "Earth sciences & geology
        550"=> "Earth sciences
        551"  =>  "Geology, hydrology, meteorology
        552"=>"Petrology
        553" => "Economic geology
        554"  => "Earth sciences of Europe
        555" =>"Earth sciences of "Asia
        556"  => "Earth sciences of "Africa
        557"  => "Earth sciences of  => North America
        558" => "Earth sciences of  => "South America
        559"  => "Earth sciences of "Australasia,  => "=> "Pacific" => "Ocean islands, "Atlantic" => "Ocean islands, "Arctic islands, "Antarctica, extraterrestrial worlds
    560"=> "Fossils & prehistoric life
        560"=> "=> "Paleontology
        561"  =>  "=> "Paleobotany; fossil microorganisms
        562" => "Fossil invertebrates
        563" => "Miscellaneous fossil marine & seashore invertebrates
        564"  => "Fossil  => "Mollusca &  => "Molluscoidea
        565"=> "Fossil "Arthropoda
        566"  => "Fossil  => "Chordata
        567"  => "Fossil cold-blooded vertebrates
        568" => "Fossil "Aves (birds)
        569"  => "Fossil  => "Mammalia
    570"=> "Biology
        570"=> "Biology
        571"  => "=> "Physiology & related subjects
        572" => "Biochemistry
        573" => "Specific physiological systems in animals, regional histology & physiology in animals
        574"  => "Not assigned or no longer used
        575"=> "Specific parts of & physiological systems in plants
        576" =>  "Genetics and evolution
        577"  => "Ecology
        578" => "Natural history of organisms & related subjects
        579"  => "Natural history of microorganisms, fungi, algae
    580"=> "=> "Plants
        580"=> "=> "Plants
        581"  => "Specific topics in natural history of plants
        582"=>"Plants noted for specific vegetative characteristics and flowers
        583" => "Magnoliopsida ( => "Dicotyledones)
        584" => "Liliopsida ( => "Monocotyledones)
        585"=> "=> "Pinophyta ( => "Gymnosperms)
        586" =>  "Cryptogamia ( => "Seedless plants)
        587"=>"Pteridophyta
        588" => "Bryophyta
        589"  => "No longer used—formerly  => "Forestry 
    590" => "Animals (Zoology)
        590" => "Animals
        591"  => "Specific topics in natural history of animals
        592" => "Invertebrates
        593" => "Miscellaneous marine & seashore invertebrates
        594"  => "Mollusca &  => "Molluscoidea
        595 "Arthropoda
        596" =>  "Chordata
        597" => "Cold-blooded vertebrates
        598" => "Aves ( => "Birds)
        599"  => "Mammalia ( => "Mammals)

 => "Class 60"0" => –  => "Technology

    60"0"=> "Technology
        60"0"=> "Technology ("Applied sciences)
        60"1  => "Philosophy& theory
        602" =>"Miscellany
        603" =>"Dictionaries, encyclopedias, concordances
        60"4"  => "Technical drawing, hazardous materials technology; groups of people
        60"5"=> "Serial publications
        60"6" => "Organizations
        607" => "Education, research, related topics
        608"=>"Patents
        609" => "History, geographic treatment, biography
    6"10"=> "Medicine & health
        6"10"=> "Medicine & health
            6"10".3"  => "Medical encyclopedias
            6"10".6"  => "Medical organizations & professions
            6"10".72" => "Medical research
            6"10".9"  => "Geography and history of medicine
        611" =>  "Human anatomy, cytology, histology
            61"1.2 "Respiratory (lung, respiratory system)
            61"1.3"  => "Gastrointestinal (dental anatomy)
            61"1.6"  => "Genitourinary (genital system)
            61"1.7"  => "Musculoskeletal (seed coat)
            61"1.8" => "Anatomy of the sense organs and nervous system
                61"1.82 "Anatomy of the brain
            61"1.9"  => "Topographic anatomy (back)
        6"12" => "Human physiology
        613"=>"Personal health & safety
            6"13.0""23"  => "=> "Professions hygiene and health
            6"13.1" => "Role of the natural environment
            6"13.2" => "Diet (food hygiene, nutrition, diet, nutritional value of food and beverages)
            6"13.4" => "Cleanliness  => "Care (hygiene and personal cleanliness, personal care)
            6"13.5" => "Role of unnatural environment (housing, housing, temperature)
            6"13.6"
                6"13.62" => "Hygiene in the business (industrial hygiene)
                6"13.66" =>  "Self  => "Defense
            6"13.7"  => "Condition physique (bodybuilding, fitness, forme physique) => "[4""]",
                6"13.70"46" =>  "Hatha yoga, yoga physique => "[5"]",
                6"13.71"  =>  "Exercising, sports (aerobics, sauna, appearance surveillance and physical form) => "[6"]",
                6"13.79" =>Relaxation, sleep => "[7"]",
        6"14" => "Forensic medicine; incidence of injuries, wounds, disease; public preventive medicine
        6"15"=> "=> "Pharmacology and therapeutics
        6"16" =>  "Diseases
        6"17" => "Surgery, regional medicine, dentistry, ophthalmology, otology, audiology
        6"18"=> "Gynecology, obstetrics, pediatrics, geriatrics
        6"19" => "No longer used—formerly  => "Experimental medicine
    6"20" =>"Engineering
        6"20" =>"Engineering & "Applied operations
        6"21 "Applied physics
        622" =>"Mining & related operations
        6"23"  => "Military & nautical engineering
        6"24 => "Civil engineering
        6"25" =>"Engineering of railroads, roads
        6"26" =>  "Not assigned or no longer used
        6"27" => "Hydraulic engineering
        628"=> "Sanitary engineering
        629" => "Other branches of engineering
    630" => "Agriculture
        630" => "Agriculture & related technologies
        631"  =>  "Specific techniques; apparatus, equipment, materials
        632"=>"Plant injuries, diseases, pests
        633"  => "Field & plantation crops
        634""" => "Orchards, fruits, forestry
        635" =>"Garden crops ( => "Horticulture)
        636" => "Animal husbandry
        637"  => "=> "Processing dairy & related products
        638" => "Insect culture
        639"  => "Hunting, fishing, conservation, related technologies
    640"=> "Home & family management
        640"=> "Home & family management
        6"41"  =>  "Food & drink
        6"42" =>"Meals & table service
        6"43" =>"Housing & household equipment
        64"4" => "Household utilities
        64"5" =>"Household furnishings
        646" =>  "Sewing, clothing, management of personal and family life
        647" => "Management of public households ( => "Institutional housekeeping)
        648"=> "Housekeeping
        649" => "Child rearing; home care of people with disabilities & illnesses
    650"=> "Management & public relations
        650"=> "Management & auxiliary services
        651" => "Office services
        652"=>"Processes of written communication
        653" => "Shorthand
        654"–656"  => "Not assigned or no longer used
        657" => "Accounting
        658" => "General management
        659" => "Advertising & public relations
    660"=> "Chemical engineering
        660"=> "Chemical engineering & related technologies
        661"  =>  "Technology of industrial chemicals
        662" => "Technology of explosives, fuels, related products
        663" => "Beverage technology
        664"  => "Food technology
        665"=> "Technology of industrial oils, fats, waxes, gases
        666"  => "Ceramic & allied technologies
        667"  => "Cleaning, color, coating, related technologies
        668" => "Technology of other organic products
        669"  => "Metallurgy
    670"=> "Manufacturing
        670"=> "Manufacturing
        671"  => "Metalworking processes & primary metal products
        672" => "Iron, steel, other iron alloys
        673" => "Nonferrous metals
        674" => "Lumber processing, wood products, cork
        675 "Leather & fur processing
        676" =>  "=> "Pulp & paper technology
        677"  => "Textiles
        678" => "Elastomers & elastomer products
        679" => "Other products of specific kinds of materials
    680"=> "Manufacture for specific uses
        680"=> "Manufacture of products for specific uses
        681"  => "=> "Precision instruments & other devices
        682" => "Small forge work ( => "Blacksmithing)
        683" => "Hardware & household appliances
        684"  => "Furnishings & home workshops
        685 "Leather & fur goods, & related products
        686" =>  "=> "Printing & related activities
        687" => "Clothing & accessories
        688"" => "Other final products, & packaging technology
        689"  => "Not assigned or no longer used 
    690"=> "Construction of buildings
        690"=> "Construction of buildings
        691"  => "Building materials
        692 "Auxiliary construction practices
        693" => "Construction in specific types of materials & for specific purposes
        694" Wood construction
        695 "Roof covering
        696 "Utilities
        697" => "Heating, ventilating, air-conditioning engineering
        698"=> "Detail finishing
        699"  => "Not assigned or no longer used

 => "Class 70"0" => – "Arts & recreation

    70"0" => "Arts
        70"0"=> "The "Arts
        70"1  => "Philosophy& theory of fine & decorative arts
        702" =>"Miscellany of fine & decorative arts
        703" =>"Dictionaries, encyclopedias, concordances of fine & decorative arts
        70"4"  => "Special topics in fine & decorative arts
        70"5"=> "Serial publications of fine & decorative arts
        70"6" => "Organizations & management of fine & decorative arts
        707" => "Education, research, related topics of fine & decorative arts
        708" => "Galleries, museums, private collections of fine & decorative arts
        709" => "History, geographic treatment, biography
    7""10" => "Area planning & landscape architecture
        7""10" => "Area planning & landscape architecture
        711" =>"Area planning ( => "Civic art)
        712 "Landscape architecture ("Landscape design)
        7""13"Landscape architecture of trafficways
        714" Water features in landscape architecture
        7""15 Woody plants in landscape architecture
        7""16" =>  "Herbaceous plants in landscape architecture
        7""17" => "Structures in landscape architecture
        7""18" => "Landscape design of cemeteries
        7""19" => "Natural landscapes
    7"20" => "Architecture
        7"20" => "Architecture
        7"21 "Architectural materials & structural elements
        7"22 "Architecture from earliest times to ca. 30"0"
        7"23" => "Architecture from ca. 30"0" => to "1399
        7"24" => "Architecture from "1400"
        7"25" =>"=> "Public structures
        7"26" =>  "Buildings for religious & related purposes
        7"27" => "Buildings for educational & research purposes
        728" => "Residential & related buildings
        729" => "Design & decoration of structures & accessories
    730"=> "Sculpture, ceramics, & metalwork
        730"=> "Sculpture & related arts
        731"  =>  "=> "Processes, forms, subjects of sculpture
        732" => "Sculpture from earliest times to ca. 50"0", sculpture of nonliterate peoples
        733"  Greek,  => "Etruscan, "Roman sculpture
        734" => "Sculpture from ca. 50"0" => to "1399
        735" =>"Sculpture from "1400"
        736"  => "Carving & carvings
        737"  => "Numismatics & sigillography
        738" => "Ceramic arts
        739" => "Art metalwork
    740"=> "Graphic arts & decorative arts
        740"=> "Graphic arts
        7"41"  =>  "Drawing & drawings
        7"42" => "Perspective in drawing
        7"43" =>"Drawing & drawings by subject
        74"4" => "Not assigned or no longer used
        74"5" =>"Decorative arts
        746" =>  "Textile arts
        747" => "Interior decoration
        748"=> "Glass
        749" => "Furniture & accessories
    750"=> "=> "Painting
        750"=> "=> "Painting & paintings
        751"  =>  "Techniques, procedures, apparatus, equipment, materials, forms
        752" => "Color
        753" => "Symbolism, allegory, mythology, legend
        754"  => "Genre paintings
        755" => "Religion
        756"  => "Not assigned or no longer used
        757"  => "Human figures
        758" => "Nature, architectural subjects & cityscapes, other specific subjects
        759"  => "History, geographic treatment, biography
    760"=> "=> "Printmaking & prints
        760"=> "=> "Printmaking & prints
        761" =>"Relief processes ( => "Block printing)
        762" => "Not assigned or no longer used
        763""Lithographic processes ( => "=> "Planographic processes)
        764"  => "Chromolithography & serigraphy
        765"=> "Metal engraving
        766"  => "Mezzotinting, aquatinting, & related processes
        767"  => "Etching & drypoint
        768" => "Not assigned or no longer used
        769"  => "=> "Prints
    770"=> "=> "Photography, computer art, film, video
        770"=> "=> "Photography, computer art, cinematography, videography
        771"  => "Techniques, procedures, apparatus, equipment, materials
        772" => "Metallic salt processes
        773"=>"Pigment processes of printing
        774"  => "No longer used—formerly  => "Holography
        775"=> "No longer used—formerly  => "Digital photography
        776" =>  "Computer art ( => "Digital art)
        777"  => "Cinematography & Videography
        778" => "Specific fields & special kinds of photography
        779"  => "=> "Photographic images
    780"=> "Music
        780"=> "Music
        781"  => "General principles & musical forms
        782 Vocal music
        783" => "Music for single voices
        784"  => "Instruments &  => "Instrumental ensembles & their music
        785"=> "Ensembles with only one instrument per part
        786 "Keyboard, mechanical, electrophonic, percussion instruments
        787" => "Stringed instruments ( => "Chordophones)
        788" => Wind instruments ("Aerophones)
        789" => "Unassigned or no longer used 
    790"=> "Sports, games & entertainment
        790" => "Recreational & performing arts
        791"  => "=> "Public performances
        792" => "Stage presentations
        793" => "Indoor games & amusements
        794"  => "Indoor games of skill
        795"=> "Games of chance
        796 "Athletic & outdoor sports & games
        797 "Aquatic & air sports
        798"=> "Equestrian sports & animal racing
        799"  => "Fishing, hunting, shooting

 => "Class 80"0" => – "Literature

    80"0" => "Literature, rhetoric & criticism
        80"0" => "Literature ( => "Belles-lettres) & rhetoric
        80"1  => "Philosophy& theory
        802" =>"Miscellany
        803" =>"Dictionaries, encyclopedias, concordances
        80"4"  => "Not assigned or no longer used
        80"5"=> "Serial publications
        80"6" => "Organizations & management
        807" => "Education, research, related topics
        80"8" => "Rhetoric & collections of literary texts from more than two literatures
        809" => "History, description, critical appraisal of more than two literatures
    8""10" => American literature in English
        8""10" => American literature in English
        81"1 American poetry in English
        812 American drama in English
        8""13American fiction in English
        814" American essays in English
        8""15 American speeches in English
        8""16 American letters in English
        8""17 American humor & satire in English
        8""18 American miscellaneous writings in English
        8""19" => "No longer used—formerly  => "=> "Puzzle activities
    8"20" => English &" => "Old English literatures
        8"20" => English &" => "Old English ("Anglo- => "Saxon) literatures
        8"21 English  => "=> "Poetry
        8"22 English drama
        8"23" English fiction
        8"24" English essays
        8"25" => English speeches
        8"26 English letters
        8"27 English humor & satire
        828 English miscellaneous writings
        829" => "Old English ("Anglo- => "Saxon) literature
    830"=> "German & related literatures
        830"=> "German literature & literatures of related languages
        831"  =>  "German poetry
        832" => "German drama
        833"  => "German fiction
        834" => "German essays
        835" =>"German speeches
        836"  => "German letters
        837"  => "German humor & satire
        838" => "German miscellaneous writings
        839" => "Other Germanic literatures
    840"=> "French & related literatures
        840"=> "French literature & literatures of related "Romance languages
        8"41"  =>  "French poetry
        8"42" =>"French drama
        8"43" =>"French fiction
        84"4" => "French essays
        84"5" =>"French speeches
        846" =>  "French letters
        847" => "French humor & satire
        848"=> "French miscellaneous writings
        849" => "Occitan, Catalan,  => "Franco- => "=> "Provençal literatures
    850"=> "Italian, Romanian, & related literatures
        850" => "Literatures of  => "Italian,  => "Dalmatian, Romanian, "Rhaetian,  => "Sardinian,  => "Corsican languages
        851"  =>  "Italian poetry
        852" => "Italian drama
        853" => "Italian fiction
        854"  => "Italian essays
        855" =>"Italian speeches
        856"  => "Italian letters
        857"  => "Italian humor & satire
        858" => "Italian miscellaneous writings
        859" => "Literatures of Romanian, "Rhaetian,  => "Sardinian,  => "Corsican languages
    860" => Spanish, => "Portuguese,  => "Galician literatures
        860" => "Literatures of Spanish, => "Portuguese,  => "Galician languages
        86"1 Spanish poetry
        862 Spanish drama
        863 => "Spanish fiction
        864" Spanish essays
        865 Spanish speeches
        866" Spanish letters
        867" Spanish humor & satire
        868" => Spanish miscellaneous writings
        869" => "Literatures of => "Portuguese &  => "Galician languages
    870" => "Latin &  => "Italic literatures
        870" => "Latin literature & literatures of related  => "Italic languages
        871" => "Latin poetry
        872 "Latin dramatic poetry & drama
        873""Latin epic poetry & fiction
        874" => "Latin lyric poetry
        875 "Latin speeches
        876 "Latin letters
        877" => "Latin humor & satire
        878" => "Latin miscellaneous writings
        879" => "Literatures of other  => "Italic languages
    880"=> "Classical & modern  Greek literatures
        880"=> "Classical  Greek literature & literatures of related  => "Hellenic languages
        881"  => "Classical  Greek poetry
        882" => "Classical  Greek drama
        883" => "Classical  Greek epic poetry & fiction
        884"  => "Classical  Greek lyric poetry
        885"=> "Classical  Greek speeches
        886" =>  "Classical  Greek letters
        887" => "Classical  Greek humor & satire
        888" => "Classical  Greek miscellaneous writings
        889"  => "Modern  Greek literature
    890"" => "Other literatures
        890" => "Literatures of other specific languages and language families
        891"  => "East  => "Indo-European &  => "Celtic literatures
        892 "Afro-"Asiatic literatures
        893" => "Non- => "Semitic "Afro-"Asiatic literatures
        894" => "Literatures of "Altaic, "Uralic,  => "Hyperborean,  => "Dravidian languages; literatures of miscellaneous languages of  => "South "Asia
        895 "Literatures of  => "East &  => "Southeast "Asia
        896 "African literatures
        897 "Literatures of  => North American native languages
        898" => "Literatures of  => "South American native languages
        899" => "Literatures of non-"Austronesian languages of" => "Oceania, of "Austronesian languages, of miscellaneous languages

 => "Class 90"0" => –  => "History & geography
90"0"=> "History

    90"0"=> "History, geography, & auxiliary disciplines
    90"1  => "Philosophy& theory of history
    902" =>"Miscellany of history
    903" =>"Dictionaries, encyclopedias, concordances of history
    90"4"  => "Collected accounts of events
    90"5"=> "Serial publications of history
    90"6" => "Organizations & management of history
    907" => "Education, research, related topics of history
    908" => "History with respect to groups of people
    90"9 World history

9""10" =>"Geography & travel

    9""10" =>"Geography & travel
    911" =>  "Historical geography
    912" => "Graphic representations of surface of earth and of extraterrestrial worlds
    9"13" => "Geography of & travel in ancient world
    914"  => "Geography of & travel in Europe
    9""15"=> "Geography of & travel in "Asia
    9""16" =>  "Geography of & travel in "Africa
    9""17" => "Geography of & travel in  => North America
    9""18"=> "Geography of & travel in  => "South America
    9""19" => "Geography of & travel in "Australasia,  => "=> "Pacific" => "Ocean islands, "Atlantic" => "Ocean islands, "Arctic islands, "Antarctica, & on extraterrestrial worlds

9"20" =>"Biography & genealogy

    9"20" =>"Biography, genealogy, insignia
    9"21–928"=> "This range is reserved as an optional location for biographies, which are shelved alphabetically by subject's last name.
    929" => "Genealogy, names, insignia

930"=> "History of ancient world (to ca. 499")

    930"=> "History of ancient world to ca. 499"
    931"  =>  "China to 4""20"
    932" => "Egypt to 640"
    933"  => "=> "Palestine to 70"
    934" => "South "Asia to 647
    935" =>"Mesopotamia to 637" &  => "Iranian  => "=> "Plateau to 637"
    936" Europe north & west of  => "Italian  => "=> "Peninsula to ca. 499"
    937"  => "Italian  => "=> "Peninsula to 4"76 & adjacent territories to 4"76
    938" => "Greece to 3"23"
    939" => "Other parts of ancient world

940"=> "History of Europe

    940"=> "History of Europe
    9"41 British  Isles
    9"4"2 England & Wales
    9"4"3 => "Germany & neighboring central European countries
    94"4" France & Monaco
    94"5" => Italy,  => "San  => "Marino, Vatican  => "City,  => "Malta
    946" =>  "Spain, "Andorra,  => "Gibraltar,  => "Italy
    947 Russia & neighboring east European countries
    948 Scandinavia
    949" => "Other parts of Europe

950"=> "History of "Asia

    950"=> "History of "Asia
    951"  =>  "China & adjacent areas
    952 "Japan
    953""Arabian  => "=> "Peninsula & adjacent areas
    954"  => "India & neighboring south "Asian countries;
    955" =>"Iran
    956"  => "Middle  => "East ( => "Near  => "East)
    957"  => "Siberia ("Asiatic Russia)
    958" => "Central "Asia
    959"  => "Southeast "Asia

960"=> "History of "Africa

    960"=> "History of "Africa
    961"  =>  "Tunisia & "Libya
    962" => "Egypt,  => "Sudan,  => "South  => "Sudan
    963" => "Ethiopia &  => "Eritrea
    964"  => "Morocco,  => "Ceuta,  => "Melilla Western  => "Sahara,  => "Canary  => "Islands
    965 "Algeria
    966" West "Africa & offshore islands
    967"  => "Central "Africa & offshore islands
    968" => "Republic of  => "South "Africa & neighboring southern "African countries
    969"  => "South  => "Indian" => "Ocean islands

970"=> "History of  => North America

    970"=> "History of  => North America
    971"  Canada
    972" => "Mexico,  => "Central America, West  => "Indies,  => "Bermuda
    973"United  States
    974"  => Northeastern United  States ( => "New England &  => "Middle "Atlantic states)
    975"=> "Southeastern United  States ( => "South "Atlantic states)
    976" =>  "South central United  States
    977"  => North central United  States
    978" => Western United  States
    979"  => "Great  => "Basin &  => "=> "Pacific  => "Slope region of United  States

980"=> "History of  => "South America

    980"=> "History of  => "South America
    981"  => "Brazil
    982 "Argentina
    983" => "Chile
    984"  => "Bolivia
    985"=> "=> "Peru
    986" =>  "Colombia &  => "Ecuador
    987 Venezuela
    988" => "Guiana
    989"  => "=> "Paraguay & "Uruguay

990"=> "History of other areas");*/

$projp = array(
        "000" => "Computer science, information & general works",
    "010"  => "Bibliographies",
    "020"  =>  "Library & information sciences",
    "030"  =>  "Encyclopedias & books of facts",
    "040"  =>  "Unassigned (formerly Biographies)",
    "050"  => "Magazines, journals & serials",
    "060" => "Associations, organizations & museums",
    "070"  => "News media, journalism & publishing",
    "080" => "Quotations",
    "090"  => "Manuscripts & rare books",
  "100"  => "Philosophy & psychology",
    "110"  => "Metaphysics",
    "120"  => "Epistemology",
    "130" => "Parapsychology & occultism",
    "140" => "Philosophical schools of thought",
    "150" => "Psychology",
    "160" => "Philosophical logic",
    "170" => "Ethics", 
        "180" => "Ancient, medieval, eastern philosophy",
    "190"=> "Modern Western philosophy (19th-century, 20th-century)",
 "200" => "Religion",
    "210" =>"Philosophy& theory of religion",
    "220" =>"The  Bible",
    "230"=> "Christianity",
    "240"=> "Christian practice & observance",
    "250"=> "Christian orders & local church",
    "270"=> "History of Christianity",
    "280"=> "Christian denominations",
    "290" => "Other religions",
    "300"=> "Social sciences, sociology & anthropology",
    "310"=> "Statistics",
    "320" =>"Political science",
    "330"=> "Economics",
    "340" => "Law",
    "350" =>"Public administration & military science",
    "360"=> "Social problems & social services",
    "370"=> "Education",
    "380"=> "Commerce, communications, & transportation",
    "390"=> "Customs, etiquette, & folklore",
    "400" => "Language",
    "410" => "Linguistics",
    "420" => "English & English languages",
    "430"=> "German & related languages",
    "440"=> "French & related languages",
    "450"=> "Italian, Romanian, & related languages",
    "460" => "Spanish,Portuguese, Galician",
    "470" => "Latin &  Italic languages",
    "480"=> "Classical & modern  Greek languages",
    "490" => "Other languages",
"500" => "Science",
    "510"=> "Mathematics",
    "520" => "Astronomy",
    "530" =>"Physics",
    "540"=> "Chemistry",
    "550"=> "Earth sciences & geology",
    "560"=> "Fossils & prehistoric life",
    "570"=> "Biology",
    "580" =>"Plants",
    "590" => "Animals (Zoology)",
    "600"=> "Technology",
    "610"=> "Medicine & health",
        "620" =>"Engineering & Applied operations",
    "630" => "Agriculture",
    "640"=> "Home & family management",
    "650"=> "Management & public relations",
    "660"=> "Chemical engineering",
    "670"=> "Manufacturing",
    "680"=> "Manufacture for specific uses",
    "690"=> "Construction of buildings",
    "700" => "Arts",
   "710" => "Area planning & landscape architecture",
    "720" => "Architecture",
    "730"=> "Sculpture, ceramics, & metalwork",
    "740"=> "Graphic arts & decorative arts",
    "750" =>"Painting",
    "760" =>"Printmaking & prints",
    "770" =>"Photography, computer art, film, video",
    "780"=> "Music",
    "790"=> "Sports, games & entertainment",
    "800" => "Literature, rhetoric & criticism",
    "810" => "American literature in English",
    "820" => "English & Old English literatures",
    "830" => "German & related literatures",
    "840"=> "French & related literatures", 
    "850"=> "Italian, Romanian, & related literatures",
    "860" => "Spanish, Portuguese, Galician literatures",
    "870" => "Latin & Italic literatures",
    "880"=> "Classical & modern  Greek literatures",
    "890" => "Other literatures",
"900"=> "History",

    "900"=> "History, geography, & auxiliary disciplines",

"910" =>"Geography & travel",

"920" =>"Biography & genealogy",

"930"=> "History of ancient world (to ca. 499)",

"940"=> "History of Europe",

"950"=> "History of Asia",

"960"=> "History of Africa",

"970"=> "History of North America",

"980"=> "History of South America",

"990"=> "History of other areas");



print_r(json_encode($projp[$rmk]));



      /*  1.1 Class A – General Works
        1.2 Class B – Philosophy. Psychology. Religion
        1.3 Class C – Auxiliary Sciences of History
        1.4 Class D – World History and History of Europe, Asia, Africa, Australia, New Zealand, etc.
        1.5 Class E – History of the Americas
        1.6 Class F – Local History of the Americas
        1.7 Class G – Geography, Anthropology, Recreation
        1.8 Class H – Social Sciences
        1.9 Class J – Political Science
        1.10 Class K – Law
        1.11 Class L – Education
        1.12 Class M – Music
        1.13 Class N – Fine Arts
        1.14 Class P – Language and Literature
        1.15 Class Q – Science
        1.16 Class R – Medicine
        1.17 Class S – Agriculture
        1.18 Class T – Technology
        1.19 Class U – Military Science
        1.20 Class V – Naval Science
        1.21 Class Z – Bibliography, Library Science
    2 See also
    3 Notes
    4 References
    5 External links

Classification
Java programming books in the QA subclass.
Letter 	Subject area
A 	General Works
B 	Philosophy. Psychology. Religion
C 	Auxiliary Sciences of History
D 	World History and History of Europe, Asia, Africa, Australia, New Zealand, etc..
E 	History of the Americas
F 	History of the Americas
G 	Geography, Anthropology, and Recreation
H 	Social Sciences
J 	Political Science
K 	Law
L 	Education
M 	Music
N 	Fine Arts
P 	Language and Literature
Q 	Science
R 	Medicine
S 	Agriculture
T 	Technology
U 	Military Science
V 	Naval Science
Z 	Bibliography, Library Science, and General Information Resources
Class A – General Works
Main article: Library of Congress Classification:Class A -- General Works

    Subclass AC – Collections. Series. Collected works
    Subclass AE – Encyclopedias
    Subclass AG – Dictionaries and other general reference works
    Subclass AI – Indexes
    Subclass AM – Museums. Collectors and collecting
    Subclass AN – Newspapers
    Subclass AP – Periodicals
    Subclass AS – Academies and learned societies
    Subclass AY – Yearbooks. Almanacs. Directories
    Subclass AZ – History of scholarship and learning. The humanities

Class B – Philosophy. Psychology. Religion
Main article: Library of Congress Classification:Class B -- Philosophy, Psychology, Religion

    Subclass B – Philosophy (General)
    Subclass BC – Logic
    Subclass BD – Speculative philosophy
    Subclass BF – Psychology
    Subclass BH – Aesthetics
    Subclass BJ – Ethics
    Subclass BL – Religions. Mythology. Rationalism
    Subclass BM – Judaism
    Subclass BP – Islam. Bahaism. Theosophy, etc.
    Subclass BQ – Buddhism
    Subclass BR – Christianity
    Subclass BS – The Bible
    Subclass BT – Doctrinal theology
    Subclass BV – Practical Theology
    Subclass BX – Christian Denominations

Class C – Auxiliary Sciences of History
Main article: Library of Congress Classification:Class C -- Auxiliary Sciences of History

    Subclass C – Auxiliary Sciences of History
    Subclass CB – History of Civilization
    Subclass CC – Archaeology
    Subclass CD – Diplomatics. Archives. Seals
    Subclass CE – Technical Chronology. Calendar
    Subclass CJ – Numismatics
    Subclass CN – Inscriptions. Epigraphy
    Subclass CR – Heraldry
    Subclass CS – Genealogy
    Subclass CT – Biography

Class D – World History and History of Europe, Asia, Africa, Australia, New Zealand, etc.
Main article: Library of Congress Classification:Class D -- History, General and Old World

    Subclass D – History (General)
    Subclass DA – Great Britain
    Subclass DAW – Central Europe
    Subclass DB – Austria – Liechtenstein – Hungary – Czechoslovakia
    Subclass DC – France – Andorra – Monaco
    Subclass DD – Germany
    Subclass DE – Greco-Roman World
    Subclass DF – Greece
    Subclass DG – Italy – Malta
    Subclass DH – Low Countries – Benelux Countries
    Subclass DJ – Netherlands (Holland)
    Subclass DJK – Eastern Europe (General)
    Subclass DK – Russia. Soviet Union. Former Soviet Republics – Poland
    Subclass DL – Northern Europe. Scandinavia
    Subclass DP – Spain – Portugal
    Subclass DQ – Switzerland
    Subclass DR – Balkan Peninsula
    Subclass DS – Asia
    Subclass DT – Africa
    Subclass DU – Oceania (South Seas)
    Subclass DX – Romanies

Class E – History of the Americas
Main article: Library of Congress Classification:Class E -- History of America

    Class E does not have any subclasses.

Class F – Local History of the Americas
Main article: Library of Congress Classification:Class F -- Local History of the United States and British, Dutch, French, and Latin America

    Class F does not have any subclasses, however Canadian Universities and the Canadian National Library use FC for Canadian History, a subclass that the LC has not officially adopted, but which it has agreed not to use for anything else[7][8]

Class G – Geography, Anthropology, Recreation
Main article: Library of Congress Classification:Class G -- Geography. Anthropology. Recreation

    Subclass G – Geography (General). Atlases. Maps
    Subclass GA – Mathematical geography. Cartography
    Subclass GB – Physical geography
    Subclass GC – Oceanography
    Subclass GE – Environmental Sciences
    Subclass GF – Human ecology. Anthropogeography
    Subclass GN – Anthropology
    Subclass GR – Folklore
    Subclass GT – Manners and customs (General)
    Subclass GV – Recreation. Leisure

Class H – Social Sciences
Main article: Library of Congress Classification:Class H -- Social sciences

    Subclass H – Social sciences (General)
    Subclass HA – Statistics
    Subclass HB – Economic theory. Demography
    Subclass HC – Economic history and conditions
    Subclass HD – Industries. Land use. Labor
    Subclass HE – Transportation and communications
    Subclass HF – Commerce
    Subclass HG – Finance
    Subclass HJ – Public finance
    Subclass HM – Sociology (General)
    Subclass HN – Social history and conditions. Social problems. Social reform
    Subclass HQ – The family. Marriage, Women and Sexuality
    Subclass HS – Societies: secret, benevolent, etc.
    Subclass HT – Communities. Classes. Races
    Subclass HV – Social pathology. Social and public welfare. Criminology
    Subclass HX – Socialism. Communism. Anarchism

Class J – Political Science
Main article: Library of Congress Classification:Class J -- Political science

    Subclass J – General legislative and executive papers
    Subclass JA – Political science (General)
    Subclass JC – Political theory
    Subclass JF – Political institutions and public administration
    Subclass JJ – Political institutions and public administration (North America)
    Subclass JK – Political institutions and public administration (United States)
    Subclass JL – Political institutions and public administration (Canada, Latin America, etc.)
    Subclass JN – Political institutions and public administration (Europe)
    Subclass JQ – Political institutions and public administration (Asia, Africa, Australia, Pacific Area, etc.)
    Subclass JS – Local government. Municipal government
    Subclass JV – Colonies and colonization. Emigration and immigration. International migration
    Subclass JX – International law, see JZ and KZ (obsolete)
    Subclass JZ – International relations

Class K – Law
Main article: Library of Congress Classification:Class K -- Law

    Subclass K – Law in general. Comparative and uniform law. Jurisprudence
    Subclass KB – Religious law in general. Comparative religious law. Jurisprudence
    Subclass KBM – Jewish law
    Subclass KBP – Islamic law
    Subclass KBR – History of canon law
    Subclass KBS – Canon law of Eastern churches
    Subclass KBT – Canon law of Eastern Rite Churches in Communion with the Holy See of Rome
    Subclass KBU – Law of the Roman Catholic Church. The Holy See
    Subclasses – KD/KDK - United Kingdom and Ireland
    Subclass KDZ – America. North America
    Subclass KE – Canada
    Subclass KF – United States
    Subclass KG – Latin America – Mexico and Central America – West Indies. Caribbean area
    Subclass KH – South America
    Subclasses KJ-KKZ – Europe
    Subclasses KL-KWX – Asia and Eurasia, Africa, Pacific Area, and Antarctica
    Subclass KU/KUQ – Law of Australia and New Zealand
    Subclass KZ – Law of nations

Class L – Education
Main article: Library of Congress Classification:Class L -- Education

    Subclass L – Education (General)
    Subclass LA – History of education
    Subclass LB – Theory and practice of education
    Subclass LC – Special aspects of education
    Subclass LD – Individual institutions – United States
    Subclass LE – Individual institutions – America (except United States)
    Subclass LF – Individual institutions – Europe
    Subclass LG – Individual institutions – Asia, Africa, Indian Ocean islands, Australia, New Zealand, Pacific islands
    Subclass LH – College and school magazines and papers
    Subclass LJ – Student fraternities and societies, United States
    Subclass LT – Textbooks

Class M – Music
Main article: Library of Congress Classification:Class M -- Music

    Subclass M – Music
    Subclass ML – Literature on music
    Subclass MT – Instruction and study

Class N – Fine Arts
Main article: Library of Congress Classification:Class N -- Fine Arts

    Subclass N – Visual arts
    Subclass NA – Architecture
    Subclass NB – Sculpture
    Subclass NC – Drawing. Design. Illustration
    Subclass ND – Painting
    Subclass NE – Print media
    Subclass NK – Decorative arts
    Subclass NX – Arts in general

Class P – Language and Literature
Main article: Library of Congress Classification:Class P -- Language and Literature
The PN-subclass shelf.

    Subclass P – Philology. Linguistics
    Subclass PA – Greek language and literature. Latin language and literature
    Subclass PB – Modern languages. Celtic languages and literature
    Subclass PC – Romanic languages
    Subclass PD – Germanic languages. Scandinavian languages
    Subclass PE – English language
    Subclass PF – West Germanic languages
    Subclass PG – Slavic languages and literatures. Baltic languages. Albanian language
    Subclass PH – Uralic languages. Basque language
    Subclass PJ – Oriental languages and literatures
    Subclass PK – Indo-Iranian languages and literatures
    Subclass PL – Languages and literatures of Eastern Asia, Africa, Oceania
    Subclass PM – Hyperborean, Native American, and artificial languages
    Subclass PN – Literature (General)
    Subclass PQ – French literature – Italian literature – Spanish literature – Portuguese literature
    Subclass PR – English literature
    Subclass PS – American literature
    Subclass PT – German literature – Dutch literature – Flemish literature since 1830 – Afrikaans literature -Scandinavian literature – Old Norse literature: Old Icelandic and Old Norwegian – Modern Icelandic literature – Faroese literature – Danish literature – Norwegian literature – Swedish literature
    Subclass PZ – Fiction and juvenile belles lettres

Class Q – Science
Main article: Library of Congress Classification:Class Q -- Science

    Subclass Q – Science (General)
    Subclass QA – Mathematics
    Subclass QB – Astronomy
    Subclass QC – Physics
    Subclass QD – Chemistry
    Subclass QE – Geology
    Subclass QH – Natural history – Biology
    Subclass QK – Botany
    Subclass QL – Zoology
    Subclass QM – Human anatomy
    Subclass QP – Physiology
    Subclass QR – Microbiology

Class R – Medicine
Main article: Library of Congress Classification:Class R -- Medicine

    Subclass R – Medicine (General)
    Subclass RA – Public aspects of medicine
    Subclass RB – Pathology
    Subclass RC – Internal medicine
    Subclass RD – Surgery
    Subclass RE – Ophthalmology
    Subclass RF – Otorhinolaryngology
    Subclass RG – Gynecology and Obstetrics
    Subclass RJ – Pediatrics
    Subclass RK – Dentistry
    Subclass RL – Dermatology
    Subclass RM – Therapeutics. Pharmacology
    Subclass RS – Pharmacy and materia medica
    Subclass RT – Nursing
    Subclass RV – Botanic, Thomsonian, and Eclectic medicine
    Subclass RX – Homeopathy
    Subclass RZ – Other systems of medicine

Class S – Agriculture
Main article: Library of Congress Classification:Class S -- Agriculture

    Subclass S – Agriculture (General)
    Subclass SB – Horticulture. Plant propagation. Plant breeding
    Subclass SD – Forestry. Arboriculture. Silviculture
    Subclass SF – Animal husbandry. Animal science
    Subclass SH – Aquaculture. Fisheries. Angling
    Subclass SK – Hunting

Class T – Technology
Main article: Library of Congress Classification:Class T -- Technology

    Subclass T – Technology (General)
    Subclass TA – Engineering Civil engineering (General).
    Subclass TC – Hydraulic engineering. Ocean engineering
    Subclass TD – Environmental technology. Sanitary engineering
    Subclass TE – Highway engineering. Roads and pavements
    Subclass TF – Railroad engineering and operation
    Subclass TG – Bridges
    Subclass TH – Building construction
    Subclass TJ – Mechanical engineering and machinery
    Subclass TK – Electrical engineering. Electronics. Nuclear engineering
    Subclass TL – Motor vehicles. Aeronautics. Astronautics
    Subclass TN – Mining engineering. Metallurgy
    Subclass TP – Chemical technology
    Subclass TR – Photography
    Subclass TS – Manufacturing engineering. Mass production
    Subclass TT – Handicrafts. Arts and crafts
    Subclass TX – Home economics

Class U – Military Science
Main article: Library of Congress Classification:Class U -- Military Science

    Subclass U – Military science (General)
    Subclass UA – Armies: Organization, distribution, military situation
    Subclass UB – Military administration
    Subclass UC – Military maintenance and transportation
    Subclass UD – Infantry
    Subclass UE – Cavalry. Armor
    Subclass UF – Artillery
    Subclass UG – Military engineering. Air forces
    Subclass UH – Other military services

Class V – Naval Science
Main article: Library of Congress Classification:Class V -- Naval Science

    Subclass V – Naval science (General)
    Subclass VA – Navies: Organization, distribution, naval situation
    Subclass VB – Naval administration
    Subclass VC – Naval maintenance
    Subclass VD – Naval seamen
    Subclass VE – Marines
    Subclass VF – Naval ordnance
    Subclass VG – Minor services of navies
    Subclass VK – Navigation. Merchant marine
    Subclass VM – Naval architecture. Shipbuilding. Marine engineering

Class Z – Bibliography, Library Science
Main article: Library of Congress Classification:Class Z -- Bibliography. Library Science. Information resources

    Subclass Z – Books (General). Writing. Paleography. Book industries and trade. Libraries. Bibliography
    Subclass ZA – Information resources/materials
	
	
	ourse Name: 

  958 courses found.

    Bachelor of music production technology( music production technology)
     
    Bachelor of Education in Computer Science and Mathematics(Computer Science and Mathematics)
     
    Bachelor of Education in Business and Mathematics(Business and Mathematics)
     
    Bachelor of Education in Business and French( Business and French)
     
    Bachelor of Arts in Technical and Professional Communication(Technical and Professional Communication)
     
    Bachelor of Arts in Peace and Conflict Transformation(Peace and Conflict Transformation)
     
    Bachelor of Security Management and Police Studies(Security Management and Police Studies)
     
    Bachelor of Education Early Childhood and Primary Education (ECPE)(ECPE)
     
    Bachelor of Practical Theology(Practical Theology)
     
    Bachelor of Science in Health Promotion & Sports Science(Health Promotion & Sports Science)
     
    Bachelor of Science in Optometry and Vision Sciences(Optometry and Vision Sciences)
     
    Bachelor of Science in Community Health Practice(Community Health Practice)
     
    Bachelor of Science in Geoinformatics (Geoinformatics )
     
    Bachelor of Arts in Guidance and Counselling (Guidance and Counselling )
     
    Bachelor of Science in Automotive Engineering(Automotive Engineering)
     
    Bachelor of Music in Music Education(Music Education)
     
    Bachelor of Science, Physical Therapy (Physical Therapy )
     
    Bachelor of Science in Population Health(Population Health)
     
    Bachelor of Education,Agricultural Education(Agricultural Education)
     
    Bachelor of Education Science,Biology and Agriculture(Biology and Agriculture)
     
    Bachelor of Science in Agricultural health(Agricultural Health)
     
    Bachelor of translation studies(Translation Studies)
     
    Bachelor of Commerce in Aviation Management(Aviation Management)
     
    Bachelor of Commerce in International Business Management(International Business Management)
     
    Bachelor of Commerce in Strategic Management(Strategic Management)
     
    Bachelor of Education in Business Education(Business Education)
     
    Bachelor of Science in Family and Child Development(Family and Child Development)
     
    Bachelor of Enterprise Management (Enterprise Management )
     
    Bachelor of Science in Applied Horticulture Science(Applied Horticulture Science)
     
    Bachelor of Science in Medical Engineering(Medical Engineering)
	
	Bachelor of Technology in Event and Convention Management.(Event and Convention Management)
 
Bachelor of Technology, Health and Hospital Services Management.(Health and Hospital Services Management)
 
Bachelor of Technology in Science Laboratory Technology(Science Laboratory Technology)
 
Bachelor of Technology in Environmental Resource Management(Environmental Resource Management)
 
Bachelor of Technology in Geo Information Technology(Geo Information Technology)
 
Bachelor of Technology in Survey Technology(Survey Technology)
 
Bachelor of Technology in Power Systems(Power Systems)
 
Bachelor of Technology in Communication and Computer Networks Technology.(Communication and Computer Networks Technology)
 
Bachelor of Science (Chemistry)(Chemistry)
 
B.E.D Arts (With Guidance & Counselling)( Guidance & Counselling)
 
B.ED Adult & Community Education(Adult & Community Education)
 
Bachelor of Parks, Recreation and Leisure.( Parks, Recreation and Leisure)
 
Bachelor of Arts in Forestry(Forestry)
 
Bachelor of Science in Econometrics and Statistics(Econometrics and Statistics)
 
BSc. in Biogeochemistry(Biogeochemistry)
 
Bachelor of Science in Finance(Finance)
 
B.Ed. Science(Science)
 
B.Ed. Arts(Arts)
 
Bachelor of Science in Nursing (BScN) Upgrading Programme(Nursing (BScN) Upgrading Programme)
 
Bsc. Agriculture(Agriculture )
 
Bsc Fashion Design and Textile Technology(Fashion Design and Textile Technology)
 
BSc. in Health Information Management & Informatics(Health Information Management & Informatics)
 
Bachelor of Entrepreneurship and Small Business Management(Entrepreneurship)
 
B.sc. Agribusiness Management()
 
Bachelor of Science in spatial planning(spatial planning)
 
Bachelor of Science (pure and applied sciences)(Pure and Applied sciences)
 
Bachelor of Tourism Studies(Tourism Studies)
 
Bachelor of Philosophy in Hospitality and Tourism Management(Hospitality and Tourism Management)
 
Bachelor of science in real estate management(real estate management)
 
Bachelor of Science in Procurement and Logistics(Procurement and Logistics)
Bachelor of Science in Development Studies(Development Studies)
 
Bachelor of Science in Public Administration and Leadership(Public Administration)
 
Bachelor of Accounting and Financial Management(Accounting and Financial Management)
 
Bachelor of Science in Dental Technology(Dental Technology)
 
Bachelor of Environmental Studies Arts(Arts)
 
Bachelor of Sustainable Tourism and Hospitality Management(Tourism)
 
Bachelor of Geomatics and Geospatial Information Systems(Geomatics)
 
Bachelor of Criminology and Security Management(Criminology)
 
Bachelor of Science in Applied Statistics with Programming(Applied Statistics)
 
Bachelor of Science in Mathematics and Economics(Mathematics and Economics)
 
Bachelor of Science in Criminology and Security Studies(Criminology and Security Studies)
 
Bachelor of Science in Entrepreneurship & Small Enterprise Management(Entrepreneurship)
 
Bachelors in Community Nutrition(Community Nutrition)
 
Bachelor of Arts in Church Educational Ministries(Church Educational Ministries)
 
Bachelor of Arts in Intercultural Studies(Intercultural Studies)
 
Bachelor of Ministry(Ministry)
 
Bachelor of Commerce in Credit Management(Credit Management)
 
Bachelor of Science in Wildlife Enterprise & Management(Wildlife Enterprise & Management)
 
Bachelor of Tourism and Hotel Management(Tourism)
 
Bsc Food Science Hospitality Management()
 
Bsc Agribusiness Management & Entrepreneurship Development(Agribusiness Management )
 
Bsc Agribusiness Economics & Food Industry Management()
 
Bachelor of Science in Corporate Communication and Management()
 
Bachelors in Food Service and Hospitality(Food Service and Hospitality)
 
Bachelor of Arts in Applied Linguistics(Applied Linguistics)
 
Bachelor of Science in Governance and Leadership(Governance and Leadership)
 
Bachelor in Cooperative Studies(Cooperative Studies)
 
Bachelor of Supply Chain Management(Supply Chain Management)
 
Bachelor of Science in Physical Sciences(Physical Sciences)
 
Bachelor of Education in Special Education(Special Education)
Bachelor of Arts in Islamic Sharia(Islamic Sharia)
 
Bachelor of Disaster Management and Development(Disaster Management)
 
Bachelor of Cooperative and Community Development(Cooperative and Community Development)
 
Bachelor of Finance and Investment Management(Finance)
 
Bachelor of Arts in Linguistics, Media and Communication(Linguistics)
 
Bachelor of Arts in English(English)
 
Bachelor of Arts in Anthropology(Anthropology)
 
Bachelor Of Arts (Psychology)(Psychology)
 
BBA in Aviation Management(Aviation Management)
 
Bachelor of science in environmental health()
 
Bachelor of clinical & community nutrition()
 
Bachelor of Actuarial Science (Mathematics)
 
Bachelor of Technology (Design)()
 
B.Sc in Biochemistry(Biochemistry)
 
Bsc.Environmental Horticulture and Landscaping Technology(Horticultural landscaping)
 
Bachelor of Health Services Management (Biology/chemistry, maths & english/kiswahili )
 
Bachelor of Arts criminology(all arts subjects)
 
Bachelor of Business Informaton Technology()
 
Bachelor of Science, Mathematics()
 
Bachelor of Science, Dairy Production()
 
Bachelor of Science, Chemist()
 
Bachelor of Science, Botany()
 
Bachelor of Science, Agronomy()
 
Bachelor of Education, Science()
Bachelor of Science in Sustainable Energy and Climate Change Systems(Sustainable Energy and Climate Change Systems)
 
Bachelor of Science in Meat Production(Meat Production)
 
Community Nutrition()
 
Bachelor of Science in Animal Science(Animal Science)
 
Animal Production()
 
Bachelor of Science in Analytical Chemistry with Computing(Analytical Chemistry)
 
Technology Education()
 
Bachelor of Science, Home Science and Technology()
 
Fisheries and Aquatic Science()
 
Bachelor of Science, Soil and Land Use Management()
 
Bachelor of Science, Wood Science and Industrial Processes()
 
Bachelor of Science, Water Resource Management()
 
Home Science Education()
 
Bachelor of Science, Food Operations Management(Agriculture and Biology)
 
Bachelor of Science, Entomology and Parasitology(Chemistry and Biology)
 
Bachelor of Science, Biotechnology and Biosafety(Biology and Chemistry)
 
Bachelor of Science, Applied Statistics with computing()
 
Bachelor of Science in Agroforestry and Natural Resources()
 
Bachelor of Science in Apparel and Fashion design(Apparel and Fashion design)
 
Bachelor of Science in Health Systems Management(Health Systems Management)
 
Bachelor degree in Economics(Economics)
 
Bachelor in Economics and Information Technology(Economics)
 
BSc in Engineering (Mechatronics)
 
bachelor in Business Administration(Business Administration)
 
Bachelor of Arts in German( German)
Business Administration(b/s,maths)
 
BSC in Mathematics(Mathematics)
 
B.sc.statistics (mathematics )
 
Bachelor of Science in Graphics Communication and Advertising(Graphics Communication and Advertising)
 
Bachelor of Science in Human Nutrition and Dietetics (Nutrition )
 
Bachelor of arts (political science)_moi university()
 
Bachelor of art (political science)_moi university()
 
Bachelor of art (political science)()
 
Bachelor of arts in Penology and Criminology(Penology and Criminology)
 
Bachelor of Science (Statistics) (mathematics )
 
Bachelor of arts (music) (Music)
 
Bachelor of science (Medical Laboratory Science) (Biology, Chemistry and Mathematics or physics )
 
B.A (URBAN & REGIONAL PLANNING) ()
 
Bsc.Telecommunication and information technology(Physics)
 
bachelor in science(food science and nutrition)(science)
 
Bsc. Financial Engineering(Mathematics)
 
strategic management(management)
 
BACHELOR OF MEDICINE AND BACHELOR OF SURGERY (WITH IT)(MEDICINE)
 
Bachelor of Christian Ministries (Theology)
 B.Sc. Petroleum Engineering(Technology)
 
Bachelor of Agriculture (Animal Science)(Agriculture)
 
B. Agriculture (Agronomy and Horticultural Sciences)(Agriculture)
 
B. Agriculture (Agricultural Extension and Rural Development)(Agriculture)
 
Advanced Java(computer science)
 
Ba Community Development(Humanities Education)
 
Bachelor Of Science In Food Nutrition And Dieteticcs(Industry and science)
 
Bacehelor Of Purchasing And Supplies Managemnt(Humanities and Education)
 
Bachelor Of Arts In Economics Ba Econ(Business Management)
 
Bachelor Of Travel And Tour Operation Management(Business Management)
 
Bachelor Of Education Geography(Humanities)
 
Bachelor Of Education In Business Studies(Humanities)
 
Bachelor of Commerce(Operations Management)(Operations Management)
 
Bachelor Of Science In Ict Management(ICT )
 
Bachelor Of Technology In Textile Engineering(Technology)
 
Bachelor Of Arts In Religious Studies(Arts)
 
Bachelor Of Medical Laboratory Sciences(Medical)
 
Bachelor of Psychology Counseling(psychology)
 
Bachelor of Agriculture(Agriculture)
 
Bachelor of Arts in History(Arts)
 
Bachelor of Education in science in physics(Science)
 
Bachelor of Science in management of Agroechosystems and Environment(Science)
 
Bachelor of Arts in Social Sciences Sociology(Arts)
 
Bachelor of MassCommunication(Mass Communication)
 
Bachelor of Information Communication Technology(Technology)
 
Bachelor Arts Biblical and Religious Studies(Arts)
 
Bachelor of Arts in Geography(Geography)
 
biomedical scince and technology()
 
Bachelor of Commerce (Entrepreneurship)(Entrepreneurship)
 
education science(maths)

    Bachelor of Science in Anatomy(Anatomy)
     
    Bachelor of Science in Biochemistry(Biochemistry)
     
    Postgraduate Diploma in Psychoactive Substance Abuse(Psychoactive Substance Abuse)
     
    Postgraduate Diploma in Psychotrauma Management(Psychotrauma Management)
     
    Bachelor of Commerce in Transport and Logistics(Transport and Logistics)
     
    Bachelor of Science in Marine Resource Management(Marine Resource management)
     
    Bachelor of Technology in Renewable Energy (Environmental physics)
     
    Bachelor of Technology in Applied physics(Electronics and Instrumentation)
     
    bachelor of law()
     
    Bachelor of Science in Clinical Medicine(Clinical Medicine)
     
    Bachelor of Science in Molecular and Cellular Biology(Molecular and Cell Biology)
     
    Environmental planning and management(Environment)
     
    Bachelor of Education ICT(ICT)
     
    Bachelor of Arts in Geography &Natural Resource Management (with IT)(environment)
     
    Bachelor of Science in Pharmaceutical Sciences (with IT)(medicine)
     
    Bachelor of Science in Mathematics and Business Studies(Mathematics and Business Studies)
     
    Bachelor of Arts in Theology (with IT)(Theology)
     
    Bachelor in commerce(Business studies)
     
    Bachelor of science [Earth science with IT](Geography)
     
    Bachelor of science conservation Biology(Biology)
     
    Bachelor of Music(Music)
     
    Bachelor of Science in Civil and Structural Engineering(Civil and Structural Engineering)
     
    Bachelor of arts in project planning and management(Project planning)
     
    Nutrition and dietetics(Nutrition and health)
     
    Bachelor of Theology(BTh)()
     
    B. Sc. Media Science(Media Science)
     
    B.Sc. in Information Sciences( Information Sciences)
     
    Bachelor of Arts Armed Conflict and Peace Studies (Peace Studies)
     
    Bachelor of Science in Entrepreneurship Studies(Entrepreneurship Studies)
     
    Bachelor of Science in Communication and Journalism(Communication and Journalism)
	 Bachelor of Arts in Economics(Economics)
 
Bachelor of Hotel and Hospitality Management (BHM)(Hotel and Hospitality Management)
 
Bachelor of Business Administration (Finance, Accounting and Marketing options)(Finance, Accounting and Marketing)
 
Bachelor of Arts French(French)
 
Bachelor of Arts Human Resource Management(Human Resource Management)
 
Bachelor of Education in Primary Schools (Science and Kiswahili)
 
Bachelor of commerce (Business Information System)(Business Information System)
 
Bachelor of commerce( Procurement and Supply Chain Management(Procurement & Supply chain Management)
 
Bachelor of Engineering in Electronics & Communications Engineering(Electronics & Communications Engineering)
 
Bachelor of Engineering in Mechanical Engineering(Mechanical Engineering)
 
Bachelor of Engineering in Electrical & Electronics Engineering(Electrical & Electronics Engineering)
 
Bachelor of Engineering in Computer Science & Engineering(Computer Science & Engineering)
 
Bachelor of Engineering in Civil Engineering(Civil Engineering)
 
Bachelor of Engineering in Chemical Engineering(Chemical Engineering)
 
Bachelor of Engineering in Aerospace Engineering(Aerospace Engineering )
 
Bachelor of Engineering in Aeronautical Engineering(Aeronautical Engineering)
 
Bachelor of Arts in Counselling Psychology(Counselling Psychology)
 
Bachelor of Science (Microbiology)()
 
Bachelor of Sports Management (BSM)(Sports Management)
 
Bachelor of Education (Primary Option, with IT)()
 
Bachelor of Arts(Literature)()
 
Bachelor of Arts [Theology] with IT()
 
Bachelor of Arts [ Philosophy] with IT()
 
Bachelor of Arts in Kiswahili(Kiswahili)
 
Bachelor of Arts in Criminology with IT (Criminology )
 
Communication and Media Technology wit IT()
 
Actuarial science with IT()
 
Bachelor of Education (BEd-Arts)-Secondary option()
 
Bachelor of Science in Aquaculture Technology and Management()
 
Bachelor of Science in Environmental Studies(Environmental Studies)
Bachelor of Arts in Community Development, Sociology and Political Science and Public Administration()
 
Bachelor of Arts(Criminology, Criminal Justice & Public Safety)()
 
Bachelor of Science in Project Planning and Management(Project Planning and Management)
 
Bachelor of science (Food, Nutrition and Dietetics)()
 
Environmental Science(Science)
 
B.eng.in electrical and electronic engineering()
 
Bsc. Animal Health and Production()
 
Bachelor of Technology in Catering and Institutional Management()
 
Bachelor of Technology in Hotel and Restaurant Management()
 
Bachelor of Technology in Information Studies()
 
Bachelor of Arts Chinese(Chinese)
 
Bachelor of Science in Geospatial Information Science (Geospatial Information Science)
 
educational psychology()
 
BSc (Hons) in Business Information Technology (BBIT)( (IADCS))
 
Bachelor of Applied Communication( English or Kiswahili )
 
Bachelor of Journalism(English or Kiswahili )
 
Bsc analytical chemistry with management(chemistry)
 
Bsc industrial chemistry with management(chemistry)
 
bachelor in theology(religion)
 
bachelor of commerce(bcom)()
 
B Sc. Medical Microbiology(Microbiology)
 
Bachelor of Science in Food Service and Hospitality Management(Food Service and Hospitality Management)
 
BSc. GEOGRAPHY AND NATURAL RESOURCE MANAGEMENT, with IT(Natural Resources)
 
Bachelor of Science in Climate Change and Development(Climate Change)
 
BACHELOR OF PHYLOSOPHY(INTERNATIONAL EDUCATION)
 
Bsc. in botany and zoology(botany and zoology)
 
Bachelor of Engineering Building and Civil Engineering(Building and Civil Engineering)
 
Bachelor of Science (Dry LandAgriculture and EnterpriseDevelopment)(Agriculture and Enterprise Development)
 
Bachelor of Science in Forensic Science( Forensic Science)
 
Bachelor of Science Fisheries and Aquaculture Management(Fisheries and Aquaculture) */


?>