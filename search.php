<?php
$fileMap = [
    '0question.u' => 'http://07th-mod.com/download.php?repository=umineko-question&file=master/InDevelopment/ManualUpdates/0.utf',
    '0answer.u' => 'http://07th-mod.com/download.php?repository=umineko-answer&file=adv_mode/0.utf'
];
$contents = '';

foreach ($fileMap as $file => $url) {
    if (file_exists($file)) {
        $contents .= file_get_contents($file);
    } else {
        $newContents = file_get_contents($url);
        $contents .= $newContents;
        file_put_contents($file, $newContents);
    }
}

$nameMap = [
    1 => "Thunberg Lily",
    2 => "Door of Summer",
    3 => "HANE (Feathers)",
    4 => "Ride on",
    5 => "sea",
    6 => "Hour of Darkness",
    7 => "Novelette",
    8 => "hope",
    9 => "White Shadow",
    10 => "steady pace",
    11 => "Towering cloud in summer",
    12 => "Moonlit Night",
    13 => "Rose",
    14 => "At Death’s Door",
    15 => "Hell’s Halls",
    16 => "Fortitude",
    17 => "witch in gold(cembalo)",
    18 => "Beckoning",
    19 => "Fishy Aroma",
    20 => "stupefaction",
    21 => "praise",
    22 => "Pass",
    23 => "butterfly",
    24 => "goldenslaughterer",
    25 => "Worldend(bp)",
    26 => "The Witch of the Painting",
    27 => "suspicion",
    28 => "Scar in the Score",
    29 => "Core",
    30 => "Minute darkness",
    31 => "nighteyes",
    32 => "Closed My Heart",
    33 => "Requiem",
    34 => "mind",
    35 => "Worldend",
    36 => "play",
    37 => "system0",
    38 => "Voiceless",
    39 => "dead angle",
    40 => "Organ Short #600 Million in C Minor",
    41 => "Prison STRIP",
    42 => "String Quartet #1 in G Major — I.Allegro",
    43 => "cage",
    44 => "Golden Sneer",
    45 => "Scorpion Guts",
    46 => "Life's End (VerC)",
    47 => "Answer",
    48 => "Answer short",
    49 => "Melody inst.ver",
    50 => "Red Dread",
    51 => "moon",
    52 => "where",
    53 => "Dread of the grave",
    54 => "Worldend dominator",
    55 => "Black Liliana",
    56 => "Rest",
    57 => "End of a Daydream",
    58 => "Melody",
    59 => "Over the sky",
    60 => "sunny spot",
    61 => "The Candles Dance",
    62 => "Distant",
    63 => "psy-chorus",
    64 => "far",
    65 => "red shoes FAKE",
    66 => "mother",
    67 => "haze",
    68 => "Dancing Pipe",
    69 => "Dread of the grave -More fear-",
    70 => "Organ Short #200 Million in C Minor",
    71 => "rhythm-changer",
    72 => "happiness of marionette bonus",
    73 => "happiness of marionette",
    74 => "Dance of the Moon Rabbits",
    75 => "Melting away",
    76 => "soul of soul",
    77 => "miragecoordinator",
    78 => "prison",
    79 => "Thanks for being born",
    80 => "Wings",
    81 => "Paradise Lost",
    82 => "wingless",
    83 => "activepain",
    84 => "Dread of the grave -rhythm ver-",
    85 => "Eternity",
    86 => "over",
    87 => "Like the gale",
    88 => "F Style",
    89 => "Monochrome Clock",
    90 => "apathy",
    91 => "Mystic Forest",
    92 => "Sakutarou's Adventure",
    93 => "Parallel",
    95 => "599 million ruins",
    96 => "Happy Maria!(Instrumental)",
    97 => "Surrounding",
    98 => "open fire",
    99 => "death(from stupefaction)",
    100 => "mortal stampede",
    101 => "Victima propiciatoria",
    102 => "Revolt",
    103 => "Purgatory Catastrophe Rhapsodie",
    104 => "Happy Maria!",
    105 => "dive to emergency",
    106 => "dir",
    107 => "Endless Nine",
    108 => "dreamenddischarger",
    109 => "Discode",
    110 => "twirl",
    111 => "Future",
    112 => "Deep Blue Jeer",
    113 => "The Great Detective Knows",
    114 => "Smileless Soirée",
    115 => "one",
    116 => "Spiral",
    117 => "String Trio #600 Million in F-Sharp Minor",
    118 => "Totenblume",
    119 => "JUSTICE",
    120 => "ACI-L",
    121 => "Predator",
    122 => "Proud-dust",
    123 => "hello your dream",
    124 => "A Lonely Deep-Sea Fish",
    125 => "The Girls’ Witch Hunt",
    126 => "Patchwork Chimera",
    127 => "discolor",
    128 => "resurrectedreplayer",
    129 => "Final Answer",
    130 => "light",
    131 => "Bread of Life",
    132 => "Promise",
    133 => "Tomorrow",
    134 => "WINGS(Ver hope)",
    135 => "Fake Gray Smile",
    136 => "Eternal Chains",
    137 => "Love Examination",
    138 => "Instant",
    139 => "Look Back",
    140 => "Blue Butterfly",
    141 => "my dear",
    142 => "Something’s Up & Going Down",
    143 => "rog-limitation",
    144 => "Waltz Op.34",
    145 => "ALIVE",
    146 => "birth of new witch(inst)",
    147 => "ruriair",
    148 => "Engage of marionette",
    149 => "Life",
    150 => "Loreley",
    151 => "The Sin",
    152 => "The first and The last",
    153 => "Anti-Demon Sequentia",
    154 => "battle field",
    155 => "Rebirth",
    156 => "The Way",
    157 => "liberatedliberator",
    158 => "Thanks for all people",
    159 => "Infant Queen Bee",
    160 => "birth of new witch(Short Ver)",
    161 => "FISHYAROMA",
    162 => "le4-octobre",
    163 => "l&d-circulation",
    164 => "reflection-call",
    165 => "rain",
    166 => "7-weights",
    167 => "fall",
    168 => "bore-ral",
    169 => "ballade-continuer",
    170 => "Song without a name ver.2007 inst",
    171 => "lie-alaia",
    172 => "Golden Nocturne(inst)",
    173 => "far(flat)",
    174 => "Toybox",
    175 => "terminal entrance",
    176 => "Puppet Show",
    177 => "s/he-end",
    179 => "Song without a name full-inst",
    180 => "The End Of The World",
    181 => "goddess-gardena",
    183 => "ridicule",
    184 => "Yomotsu Hirasaka Corruption",
    185 => "the executioner",
    186 => "Song without a name ver.sakura ED-size",
    187 => "Stuffed Animal",
    188 => "Bizarre Divertimento",
    190 => "en-counse",
    191 => "lixAxil",
    192 => "Revelations(inst)",
    193 => "Flying",
    194 => "lastendconductor",
    195 => "Revelations",
    240 => "Cocoon of White Dreams -Ricordando il passato-",
    241 => "When the Seagulls Cry",
    1000 => "SuiSui☆SWEETS(^-^)",
    1010 => "Bring The Fate",
    1013 => "Bring The Fate(Ver chiru)",
];

$matches = preg_split('/bgm(1v?|play2?)/', $contents);
foreach ($matches as $match) {
    if (stripos($match, $_POST['findstr']) !== false) {
        $subMatches = [];
        $thing = trim(preg_split('/\n|\,/', $match)[0]);
        $title = $nameMap[$thing];
        preg_match("/BGM_s_Ch = $thing\s+mov.+\"(.+)\"/", $contents, $subMatches);
        $fileName = str_replace('\\', '/', $subMatches[1]);
        echo $title ? "$title ($fileName)" : $fileName;
        break;
    }
}
