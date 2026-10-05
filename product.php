<?php

class Product
{

    public $productArray = array(
        
        // Cleaning Machines -> Dry Vacuum (4)

        "01" => array(           
            'name' => 'Karcher Dry Vacuum - Basic - T 12/1',
            'code' => '01',
            'image' => 'images/product-images/Cleaning Machines/Dry Vacuum/T12_1-HEPA.jpg'
        ),
        "02" => array(            
            'name' => 'Karcher Dry Vacuum Premium - T 15/1',
            'code' => '02',
            'image' => 'images/product-images/Cleaning Machines/Dry Vacuum/T-15_1.png' 
        ),
        "03" => array(            
            'name' => 'Karcher Carpet Vacuum - CV 48/2',
            'code' => '03',
            'image' => 'images/product-images/Cleaning Machines/Dry Vacuum/CV-48_2.png'       
        ),
        "04" => array(            
            'name' => 'Karcher Backpack Vacuum - BV 5/1',
            'code' => '04',
            'image' => 'images/product-images/Cleaning Machines/Dry Vacuum/BV-5_1.png'
        ),


        // Cleaning Machines -> Wet & Dry (9)

        "05" => array(            
            'name' => 'Karcher Wet and Dry Vacuum (Basic) - NT 22/1 Ap L',
            'code' => '05',
            'image' => 'images/product-images/Cleaning Machines/Wet & Dry/nt-22_1-Ap-L.png'
        ),
        "06" => array(            
            'name' => 'Karcher Wet and Dry Vacuum (Standard Class) - NT 27/1',
            'code' => '06',
            'image' => 'images/product-images/Cleaning Machines/Wet & Dry/NT-27_1.png'            
        ),
        "07" => array(            
            'name' => 'Karcher Wet and Dry Vacuum (Classic metal body) - NT 30/1 Me Classic',
            'code' => '07',
            'image' => 'images/product-images/Cleaning Machines/Wet & Dry/nt-30_1-me-classic.png'  
        ),
        "08" => array(            
            'name' => 'Karcher Wet and Dry Vacuum (Classic metal body) - NT 70/2 Me Classic',
            'code' => '08',
            'image' => 'images/product-images/Cleaning Machines/Wet & Dry/NT-70_2-Me-Classic.png' 
        ),
        "09" => array(           
            'name' => 'Karcher Wet and Dry Vacuum (Ap Class) - NT 40/1 Ap L',
            'code' => '09',
            'image' => 'images/product-images/Cleaning Machines/Wet & Dry/NT-40_1-Ap-L.png' 
        ),
        "10" => array(           
            'name' => 'Karcher Wet and Dry Vacuum (Ap Class) - NT 65/2 Ap',
            'code' => '10',
            'image' => 'images/product-images/Cleaning Machines/Wet & Dry/nt-65_2.png'            
        ),
        "11" => array(            
            'name' => 'Karcher Wet and Dry Vacuum (Tact Class) - NT 75/2 Tact2 Me',
            'code' => '11',
            'image' => 'images/product-images/Cleaning Machines/Wet & Dry/75_2-tact-2-me.png' 
        ),
        "12" => array(            
            'name' => 'Karcher Wet and Dry Vacuum (Ap Class) - NT 75/2 Ap Me Tc',
            'code' => '12',
            'image' => 'images/product-images/Cleaning Machines/Wet & Dry/NT-75-2-Ap-Me-Tc.jpg'
        ),
        "13" => array(            
            'name' => 'Karcher Wet and Dry Vacuum (Safety System) - NT 75/1 Me Ec H Z22',
            'code' => '13',
            'image' => 'images/product-images/Cleaning Machines/Wet & Dry/NT-75-1-Me-Ec-H-Z22.jpg'
        ),


        // Cleaning Machines -> Carpet Cleaning (2)

        "14" => array(            
            'name' => 'Spray Extractor - Puzzi 10/1',
            'code' => '14',
            'image' => 'images/product-images/Cleaning Machines/Carpet Cleaning/Puzzi-10_1.png'   
        ),
        "15" => array(            
            'name' => 'Air Blower - AB 30',
            'code' => '15',
            'image' => 'images/product-images/Cleaning Machines/Carpet Cleaning/AB-30.png'           
        ),


        // Cleaning Machines -> Cold water high pressure (11)

        "16" => array(            
            'name' => 'Cold Water High Pressure (Basic) - HD 5/11 Cage Classic',
            'code' => '16',
            'image' => 'images/product-images/Cleaning Machines/Cold water high pressure/5_11-cage-classic.png'          
        ),
        "17" => array(            
            'name' => 'Cold Water High Pressure (Compact) - HD 5/12 C',
            'code' => '17',
            'image' => 'images/product-images/Cleaning Machines/Cold water high pressure/HD-5_12-C.png'            
        ),
        "18" => array(           
            'name' => 'Cold Water High Pressure (Classic) - HD 6/15-4 Classic Kap',
            'code' => '18',
            'image' => 'images/product-images/Cleaning Machines/Cold water high pressure/6_15-4-classic-KAP.png'            
        ),
        "19" => array(           
            'name' => 'Cold Water High Pressure (Middle Class) - HD 6/15 M',
            'code' => '19',
            'image' => 'images/product-images/Cleaning Machines/Cold water high pressure/hd-6_15-M.png'            
        ),
        "20" => array(            
            'name' => 'Cold Water High Pressure (Middle Class) - HD 8/18-4 M',
            'code' => '20',
            'image' => 'images/product-images/Cleaning Machines/Cold water high pressure/hd-8_18-4-M.png'            
        ),
        "21" => array(            
            'name' => 'Cold Water High Pressure (Middle Class) - HD 9/20-4 Classic KAP',
            'code' => '21',
            'image' => 'images/product-images/Cleaning Machines/Cold water high pressure/9_20-4-KAP-Classic.png' 
        ),
        "22" => array(            
            'name' => 'Cold Water High Pressure (Super Class) - HD 10/25-4 S',
            'code' => '22',
            'image' => 'images/product-images/Cleaning Machines/Cold water high pressure/HD-10_25-4-S.png'            
        ),
        "23" => array(            
            'name' => 'Cold Water High Pressure (Ultra Class) - HD 9/50-4',
            'code' => '23',
            'image' => 'images/product-images/Cleaning Machines/Cold water high pressure/HD-9_50-4.png'            
        ),
        "24" => array(            
            'name' => 'Cold Water High Pressure (Ultra Class) - HD 9/100-4',
            'code' => '24',
            'image' => 'images/product-images/Cleaning Machines/Cold water high pressure/HD-9_100-4.png'            
        ),
        "25" => array(            
            'name' => 'Cold Water High Pressure (Special Class) - HD 7/16 Cage Classic',
            'code' => '25',
            'image' => 'images/product-images/Cleaning Machines/Cold water high pressure/HD-7-16-Cage-Classic.jpg'
        ),
        "26" => array(            
            'name' => 'Cold Water High Pressure (Special Class) - HD 10/15-4 Cage Food',
            'code' => '26',
            'image' => 'images/product-images/Cleaning Machines/Cold water high pressure/HD-10-15-4-cage-food.jpg' 
        ),


        // Cleaning Machines -> Hot water high pressure (3)

        "27" => array(           
            'name' => 'Hot Water High Pressure (Middle Class) - HDS 8/18-4 M',
            'code' => '27',
            'image' => 'images/product-images/Cleaning Machines/Hot water high pressure/HDS-8_18-4-M.png'            
        ),
        "28" => array(           
            'name' => 'Hot Water High Pressure (Middle Class) - HDS 10/20-4 M Classic',
            'code' => '28',
            'image' => 'images/product-images/Cleaning Machines/Hot water high pressure/10_20-4-M.png'            
        ),
        "29" => array(            
            'name' => 'Hot Water High Pressure (Electric Operated) - HDS-E 8/16-4 M 24 kW',
            'code' => '29',
            'image' => 'images/product-images/Cleaning Machines/Hot water high pressure/HDS-E-8_16-4-M-24-kW.png' 
        ),


        // Cleaning Machines -> Single Disk (1)

        "30" => array(            
            'name' => 'Single Disc - BDS 43/150 C Classic',
            'code' => '30',
            'image' => 'images/product-images/Cleaning Machines/Single Disk/BDS-43_150-C-Classic.png'            
        ),


        // Cleaning Machines -> Scrubber Drier (7)

        "31" => array(            
            'name' => 'Scrubber Drier (Compact) - BR 30/4 C',
            'code' => '31',
            'image' => 'images/product-images/Cleaning Machines/Scrubber Drier/BR-30_4.png'          
        ),
        "32" => array(            
            'name' => 'Scrubber Drier - Walk Behind (Electric) - BD 43/40 C Ep IN',
            'code' => '32',
            'image' => 'images/product-images/Cleaning Machines/Scrubber Drier/BD-43_40-C-Ep.png'
        ),
        "33" => array(            
            'name' => 'Scrubber Drier - Walk Behind (Battery) - BD 50/50 Bp Classic',
            'code' => '33',
            'image' => 'images/product-images/Cleaning Machines/Scrubber Drier/BD-50_50-Bp-Classic.png'            
        ),
        "34" => array(            
            'name' => 'Scrubber Drier Walk Behind (Electric) - BD 50/60 Ep Classic',
            'code' => '34',
            'image' => 'images/product-images/Cleaning Machines/Scrubber Drier/BD-50_60-Ep.png' 
        ),
        "35" => array(            
            'name' => 'Scrubber Drier Ride on - BD 50/70 R Classic Bp',
            'code' => '35',
            'image' => 'images/product-images/Cleaning Machines/Scrubber Drier/50_70-R-Classic.png'
        ),
        "36" => array(           
            'name' => 'Scrubber Drier Ride on - B 90 R Classic Bp',
            'code' => '36',
            'image' => 'images/product-images/Cleaning Machines/Scrubber Drier/B-90-R-Classic-Bp.png'
        ),
        "37" => array(           
            'name' => 'Scrubber Drier Ride on - BD 90/160 R Classic Bp',
            'code' => '37',
            'image' => 'images/product-images/Cleaning Machines/Scrubber Drier/BD-90_160-R-Classic-Bp.png'            
        ),


        // Cleaning Machines -> Sweeper (4)

        "38" => array(            
            'name' => 'Sweeper - Manual - KM 70/20',
            'code' => '38',
            'image' => 'images/product-images/Cleaning Machines/Sweeper/KM-70_20.png'            
        ),
        "39" => array(            
            'name' => 'Sweeper - Walk Behind (Battery) - KM 85/50 W Bp',
            'code' => '39',
            'image' => 'images/product-images/Cleaning Machines/Sweeper/KM-85_50-W-Bp.png'           
        ),
        "40" => array(            
            'name' => 'Sweeper - Ride on (Petrol) - KM 100/100 R G',
            'code' => '40',
            'image' => 'images/product-images/Cleaning Machines/Sweeper/KM-100_100.png'            
        ),
        "41" => array(            
            'name' => 'Sweeper - Ride on Heavy Duty (Diesel) - KM 150/500 R D Classic',
            'code' => '41',
            'image' => 'images/product-images/Cleaning Machines/Sweeper/KM-150_500-R-D.png'          
        ),


        // Cleaning Machines -> Steam Cleaner (3)

        "42" => array(            
            'name' => 'Steam Cleaner (SG 4/4)',
            'code' => '42',
            'image' => 'images/product-images/Cleaning Machines/Steam Cleaner/SG-4_4.png'          
        ),
        "43" => array(            
            'name' => 'Steam Vacuum (SGV 6/5)',
            'code' => '43',
            'image' => 'images/product-images/Cleaning Machines/Steam Cleaner/SGV-6_5.png'           
        ),
        "44" => array(           
            'name' => 'Steam Vacuum (SGV 8/5)',
            'code' => '44',
            'image' => 'images/product-images/Cleaning Machines/Steam Cleaner/SGV-8_5.jpg'           
        ),

        // Cleaning Machines -> Industrial Vacuum Cleaner (5)

        "45" => array(           
            'name' => 'Industrial Vacuum - BD 90/160 R Classic Bp',
            'code' => '45',
            'image' => 'images/product-images/Cleaning Machines/Industrial/IVR-100_22-Sc.png'  
        ),
        "46" => array(            
            'name' => 'Industrial Vacuum - Textile - IVR 100/22 Textile',
            'code' => '46',
            'image' => 'images/product-images/Cleaning Machines/Industrial/IVR-100_22-Textile.png'
        ),
        "47" => array(            
            'name' => 'Industrial Vacuum - IVM 100/22 Sc',
            'code' => '47',
            'image' => 'images/product-images/Cleaning Machines/Industrial/IVM-100_22-Sc.png'
        ),
        "48" => array(            
            'name' => 'Industrial Vacuum - IVM 100/55 Sc',
            'code' => '48',
            'image' => 'images/product-images/Cleaning Machines/Industrial/IVM-100_55-Sc.png'   
        ),
        "49" => array(            
            'name' => 'Industrial Vacuum - IVC 60/30 Tact 2',
            'code' => '49',
            'image' => 'images/product-images/Cleaning Machines/Industrial/IVC-60-30-tact-2.jpg'  
        ),

        // Cleaning Machines -> Industrial Machines (2)

        "50" => array(            
            'name' => 'Dry Ice Blaster - IB 7/40 Classic',
            'code' => '50',
            'image' => 'images/product-images/Cleaning Machines/Industrial/IB-7_40-Classic.png' 
        ),
        "51" => array(            
            'name' => 'Parts Cleaner - PC 100 M2 Bio',
            'code' => '51',
            'image' => 'images/product-images/Cleaning Machines/Industrial/PC-100-M2-Bio.png'   
        ),


        // Cleaning Consumables -> Cleaning Chemicals -> Housekeeping (17)

        "52" => array(           
            'name' => 'Washroom Cleaner and Sanitiser Concentrate - Ross WR',
            'code' => '52',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/ross-WR.jpg'  
        ),
        
        "54" => array(            
            'name' => 'Floor Cleaner - Ross FC-H',
            'code' => '54',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/Ross-FC-H.jpg' 
        ),
        "55" => array(            
            'name' => 'Neutral all-purpose cleaner - Blitz Citro',
            'code' => '55',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/blitz-citro.jpg' 
        ),
        "56" => array(            
            'name' => 'Ready-to-use glass cleaner with anti-soiling effect - Profiglass',
            'code' => '56',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/profiglass.jpg'     
        ),
        "57" => array(            
            'name' => 'Ready-to-use special care and furniture care product - Buz Finnese',
            'code' => '57',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/finesse.jpg'           
        ),
        "58" => array(            
            'name' => 'Air deodorizer - Buz RO Fresh Mahagony',
            'code' => '58',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/buz-ro-fresh-mahagony.jpg'
        ),
        "59" => array(            
            'name' => 'Air deodorizer - Buz RO Fresh Lavender',
            'code' => '59',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/lavender.jpg'          
        ),
        "60" => array(           
            'name' => 'Toilet bowl cleaner - Ross TC',
            'code' => '60',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/ross-TC.jpg'           
        ),
        "61" => array(           
            'name' => 'Neutral all-purpose cleaner - Buz RO Fresh Citral',
            'code' => '61',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/citral.png'            
        ),
        "62" => array(            
            'name' => 'Liquid basic cleaner and lime remover based on phosphoric acid - Ross DSC',
            'code' => '62',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/Ross-DCS.jpg' 
        ),
        "63" => array(            
            'name' => 'Alkaline, solvent-free degreaser for food preparation environment - Ross HDC',
            'code' => '63',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/ross-HDC.jpg'  
        ),
        "64" => array(            
            'name' => 'High alkaline dirt-breaker - Indumaster Strong',
            'code' => '64',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/indusmaster.jpg'   
        ),
        "65" => array(            
            'name' => 'Optifloor',
            'code' => '65',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/optifloor.jpg' 
        ),
        "66" => array(            
            'name' => 'Tenside-free, citrate-based cleaner - O Tens',
            'code' => '66',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/o-tens.jpg'          
        ),
        "67" => array(            
            'name' => 'Metal polish - Metapol',
            'code' => '67',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/Metapol.jpg'           
        ),
        "68" => array(           
            'name' => 'Leather care for all types of smooth leather - Buz Leather',
            'code' => '68',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/buz-leather.jpg'        ),
        "69" => array(           
            'name' => 'Ready to use crystallizer - Ross Clarino',
            'code' => '69',
            'image' => 'No Image Found'            
        ),
        

        // Cleaning Consumables -> Cleaning Chemicals -> Liquid Soap (5)

        "70" => array(            
            'name' => 'Antibacterial handwash liquid - Ross Protect Hands',
            'code' => '70',
            'image' => ''            
        ),
        "71" => array(            
            'name' => 'Mild general handwashing product - Ross Aqua OR',
            'code' => '71',
            'image' => 'images/product-images/Cleaning Chemicals/Liquid Soap/Aqua-OR.jpg'            
        ),
        /*"72" => array(            
            'name' => 'Anti Microbial Hand Wash - Ross Aqua E-AM',
            'code' => '72',
            'image' => 'images/product-images/Cleaning Chemicals/Liquid Soap/ROSS-AQUA-E-AM.jpg' 
        ),*/
        "73" => array(            
            'name' => 'Antimicrobial hand wash liquid - Ross Aqua AB ',
            'code' => '73',
            'image' => 'images/product-images/Cleaning Chemicals/Liquid Soap/Ross-Aqua-AB.jpg'
        ),
        "74" => array(            
            'name' => 'Handwash lotion - Planta Lotion',
            'code' => '74',
            'image' => 'images/product-images/Cleaning Chemicals/Liquid Soap/planta.jpg'          
        ),
        "75" => array(            
            'name' => 'Hand wash liquid - Ross Aqua OR Rose',
            'code' => '75',
            'image' => 'images/product-images/Cleaning Chemicals/Liquid Soap/ross-aqua-OR-Rose.jpg' 
        ),


        // Cleaning Consumables -> Cleaning Chemicals -> Liquid Soap New Product (1)

        "53" => array(           
            'name' => 'Washroom Cleaner and Sanitiser Concentrate - Rosa Aqua BR 803',
            'code' => '53',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/ross-aqua.png'
        ),


        // Cleaning Consumables -> Cleaning Chemicals -> Hand Sanitizer (3)

        "76" => array(           
            'name' => 'Instant hand sanitizer liquid - Ross Sanpro',
            'code' => '76',
            'image' => 'images/product-images/Cleaning Chemicals/Hand Sanitizer/ross-sanpro.png' 
        ),
        "77" => array(           
            'name' => 'Hand disinfection liquid - Ross Aseptic',
            'code' => '77',
            'image' => 'images/product-images/Cleaning Chemicals/Hand Sanitizer/ross-aseptic.png'
        ),
        "78" => array(            
            'name' => 'Instant Hand Disinfection Gel - Coroclean',
            'code' => '78',
            'image' => 'images/product-images/Cleaning Chemicals/Hand Sanitizer/coroclean.jpg' 
        ), 


        // Cleaning Consumables -> Cleaning Chemicals -> Disinfection (5)

        "79" => array(            
            'name' => 'Floor Cleaner and Sanitiser Concentrate - Ross FCS',
            'code' => '79',
            'image' => 'images/product-images/Cleaning Chemicals/Disinfection/Ross-FCS.jpg'          
        ),
        "80" => array(           
            'name' => 'Surface Disinfectant - Rosa DC',
            'code' => '80',
            'image' => 'images/product-images/Cleaning Chemicals/Disinfection/Rosa-DC.png'           
        ),
        "81" => array(           
            'name' => 'Neutral Disinfectant - Budenat IM BR 501',
            'code' => '81',
            'image' => 'images/product-images/Cleaning Chemicals/Disinfection/br-501.jpg'            
        ),
        "82" => array(            
            'name' => 'Surface and Environment Disinfectant - Infektocide BR 502',
            'code' => '82',
            'image' => 'images/product-images/Cleaning Chemicals/Disinfection/br-502.jpg'            
        ),
        "83" => array(            
            'name' => 'Rapid Spray Disinfectant for medical devices - Infektocide Spray BR 503',
            'code' => '83',
            'image' => 'images/product-images/Cleaning Chemicals/Disinfection/br- 503.jpg'           
        ),
        "84" => array(            
            'name' => 'Multi Surface Disinfectant Liquid - Sodium Hypochlorite 5%',
            'code' => '84',
            'image' => 'images/product-images/Cleaning Chemicals/Disinfection/Sodium-Hypochlorite.jpg'  
        ),


        // Cleaning Consumables -> Cleaning Chemicals -> Kitchen Hygiene (8)

        "85" => array(            
            'name' => 'Concentrated manual dishwashing liquid - Buz Sparkle BR 301',
            'code' => '85',
            'image' => 'images/product-images/Cleaning Chemicals/Kitchen Hygiene/buz-sparkle.jpg' 
        ),
        "86" => array(            
            'name' => 'Hand dishwashing agent and neutral cleaner - Dish Smart KS 19',
            'code' => '86',
            'image' => 'images/product-images/Cleaning Chemicals/Kitchen Hygiene/Dish-Smart.jpg'  
        ),
        "87" => array(            
            'name' => 'Grease and protein releaser - Bistro G 435',
            'code' => '87',
            'image' => 'images/product-images/Cleaning Chemicals/Kitchen Hygiene/Bistro-G-435.jpg'  
        ),
        "88" => array(           
            'name' => 'High alkaline cleaner for oven and grill - Buz Grill Master',
            'code' => '88',
            'image' => 'images/product-images/Cleaning Chemicals/Kitchen Hygiene/Buz-Grill-Master.jpg'   
        ),
        "89" => array(           
            'name' => 'Fruits and Vegetable sanitizer - Ross Tab',
            'code' => '89',
            'image' => 'images/product-images/Cleaning Chemicals/Kitchen Hygiene/ross-tab.jpg'
        ),
        "90" => array(            
            'name' => 'Automatic dishwash detergent - Ross Dishclean',
            'code' => '90',
            'image' => 'images/product-images/Cleaning Chemicals/Kitchen Hygiene/dishclean.jpg'
        ),        
        "91" => array(            
            'name' => 'Automatic Dishwash Liquid Neuteralizer / Rinse Aid - Ross Dishfast',
            'code' => '91',
            'image' => 'images/product-images/Cleaning Chemicals/Kitchen Hygiene/dishfast.jpg'
        ),
        "92" => array(            
            'name' => 'Ready-to-use liquid drain and pipe cleaner - Buz Flow',
            'code' => '92',
            'image' => 'images/product-images/Cleaning Chemicals/Kitchen Hygiene/buz-flow.jpg'   
        ),


        // Cleaning Consumables -> Paper Tissue (12)

        "93" => array(           
            'name' => 'Centre Feed Roll - PT-001',
            'code' => '93',
            'image' => 'images/product-images/Paper Tissue/PP-001.jpg'           
        ),
        "94" => array(           
            'name' => 'Cube Napkin - PT-003',
            'code' => '94',
            'image' => 'images/product-images/Paper Tissue/PP-005.jpg'
        ),
        "95" => array(            
            'name' => 'Face Tissue Box BG - PT-005',
            'code' => '95',
            'image' => 'images/product-images/Paper Tissue/PP-005.jpg' 
        ),
        "96" => array(            
            'name' => 'HBT Paper - PT-008',
            'code' => '96',
            'image' => 'images/product-images/Paper Tissue/PP-008.jpg'   
        ),
        "97" => array(            
            'name' => 'HRT Roll - PT-010',
            'code' => '97',
            'image' => 'images/product-images/Paper Tissue/PP-010.jpg'     
             ),
        "98" => array(            
            'name' => 'M Fold Paper Towels - PP-012',
            'code' => '98',
            'image' => 'images/product-images/Paper Tissue/PP-012.jpg'
        ),
        "99" => array(            
            'name' => 'Paper Napkin - PT-014',
            'code' => '99',
            'image' => 'images/product-images/Paper Tissue/PP-014.jpg'
        ),
        "100" => array(            
            'name' => 'Paper Napkin - PT-015',
            'code' => '100',
            'image' => 'images/product-images/Paper Tissue/PP-015.jpg'
        ),
        "101" => array(           
            'name' => 'Paper Napkin - PT-016',
            'code' => '101',
            'image' => 'images/product-images/Paper Tissue/PP-016.jpg'
        ),
        "102" => array(           
            'name' => 'Paper Napkin - PT-017',
            'code' => '102',
            'image' => 'images/product-images/Paper Tissue/PP-017.jpg'
        ),
        "103" => array(            
            'name' => 'Toilet Roll (120gm) - PT-018',
            'code' => '103',
            'image' => 'images/product-images/Paper Tissue/PP-018.jpg'
        ),
        "104" => array(            
            'name' => 'Toilet Roll (90gm) - PT-019',
            'code' => '104',
            'image' => 'images/product-images/Paper Tissue/PP-019.jpg'
        ),
        


        // Clean Air Solutions -> Industrial Air Cleaner (6)

        "105" => array(            
            'name' => 'Industrial Air Cleaner - CC 410',
            'code' => '105',
            'image' => 'images/product-images/Air Purifiers/Camfil Air Cleaner/CC-410.png'            
        ),
        "106" => array(            
            'name' => 'Industrial Air Cleaner - CC 400',
            'code' => '106',
            'image' => 'images/product-images/Air Purifiers/Camfil Air Cleaner/CC-400.png'           
        ),
        "107" => array(            
            'name' => 'Industrial Air Cleaner - CC 800',
            'code' => '107',
            'image' => 'images/product-images/Air Purifiers/Camfil Air Cleaner/CC-800.jpg'           
        ),
        "108" => array(            
            'name' => 'Industrial Air Cleaner - CC 1700',
            'code' => '108',
            'image' => 'images/product-images/Air Purifiers/Camfil Air Cleaner/CC-1700.jpg'          
        ),
        "109" => array(            
            'name' => 'Industrial Air Cleaner - CC 2000',
            'code' => '109',
            'image' => 'images/product-images/Air Purifiers/Camfil Air Cleaner/CC-2000.jpg'          
        ),
        "110" => array(            
            'name' => 'Industrial Air Cleaner - CC 6000',
            'code' => '110',
            'image' => 'images/product-images/Air Purifiers/Camfil Air Cleaner/CC-6000.png' 
        ),


        // Clean Air Solutions -> Air Purifiers -> Camfil Air Purifier (2)

        "111" => array(            
            'name' => 'Camfil Air Purifier - City Touch',
            'code' => '111',
            'image' => 'images/product-images/Air Purifiers/Camfil Purifiers/Camfil-City-M.jpg'
        ),
        "112" => array(            
            'name' => 'Camfil Air Purifier - City M',
            'code' => '112',
            'image' => 'images/product-images/Air Purifiers/Camfil Purifiers/Camfil-City-Touch.jpg'
        ),   


        // Clean Air Solutions -> Air Purifiers -> Blueair Blue Series Air Purifier (3)

        "113" => array(            
            'name' => 'Blueair Blue Series Air Purifier - Joy S',
            'code' => '113',
            'image' => 'images/product-images/Air Purifiers/Blue Series/joy S.jpg'
        ),
        "114" => array(            
            'name' => 'Blueair Blue Series Air Purifier - Blue Pure 211',
            'code' => '114',
            'image' => 'images/product-images/Air Purifiers/Blue Series/Blue Pure 211.jpg'
        ),  
        "115" => array(            
            'name' => 'Blueair Blue Series Air Purifier - Blue Pure 121',
            'code' => '115',
            'image' => 'images/product-images/Air Purifiers/Blue Series/Blue Pure 121.jpg'
        ),     
         

        // Clean Air Solutions -> Air Purifiers -> Blueair Classic Air Purifier (4)

        "116" => array(            
            'name' => 'Blueair Classic Air Purifier - Classic 205',
            'code' => '116',
            'image' => 'images/product-images/Air Purifiers/Classic/classic_205.jpg'
        ),
        "117" => array(            
            'name' => 'Blueair Classic Air Purifier - Classic 280i',
            'code' => '117',
            'image' => 'images/product-images/Air Purifiers/Classic/classic_280i.jpg'
        ),  
        "118" => array(            
            'name' => 'Blueair Classic Air Purifier - Classic 480i',
            'code' => '118',
            'image' => 'images/product-images/Air Purifiers/Classic/classic_480i.jpg'
        ), 
        "119" => array(            
            'name' => 'Blueair Classic Air Purifier - Classic 680i',
            'code' => '119',
            'image' => 'images/product-images/Air Purifiers/Classic/classic_680i.jpg'
        ),    

        

        // Clean Air Solutions -> Air Purifiers -> Blueair Pro-new Air Purifier (3)

        "120" => array(            
            'name' => 'Blueair Pro-new Air Purifier - Pro M',
            'code' => '120',
            'image' => 'images/product-images/Air Purifiers/Pro/Blueair pro M.jpg'
        ),
        "121" => array(            
            'name' => 'Blueair Pro-new Air Purifier - Pro L',
            'code' => '121',
            'image' => 'images/product-images/Air Purifiers/Pro/Blueair pro L.jpg'
        ),  
        "122" => array(            
            'name' => 'Blueair Pro-new Air Purifier - Pro XL',
            'code' => '122',
            'image' => 'images/product-images/Air Purifiers/Pro/Blueair pro XL.jpg'
        ),     
       

        // Clean Air Solutions -> Air Purifiers -> Blueair Cabin Car Air Purifier (2)

        "123" => array(            
            'name' => 'Blueair Cabin Car Air Purifier - Cabin P1',
            'code' => '123',
            'image' => 'images/product-images/Air Purifiers/Cabin/Blueair Cabin P1.jpg'
        ),
        "124" => array(            
            'name' => 'Blueair Cabin Car Air Purifier - Cabin P2i',
            'code' => '124',
            'image' => 'images/product-images/Air Purifiers/Cabin/Blueair Cabin P2i.jpg'
        ), 
        

        // Clean Air Solutions -> Industrial Dust Collectors (2)

        "125" => array(            
            'name' => 'Industrial Dust Collectors - Gold Series X-Flo',
            'code' => '125',
            'image' => 'images/product-images/Dust Collector/dust collector.jpg'
        ),
        "126" => array(            
            'name' => 'Industrial Dust Collectors - Zephyr III',
            'code' => '126',
            'image' => 'images/product-images/Dust Collector/dust collector2.jpg'
        ),   


        
        // Clean Air Solutions -> AHU Filter (4)

        "127" => array(            
            'name' => 'General Ventilation (Pre & Fine Filters)',
            'code' => '127',
            'image' => 'images/product-images/AHU Filter/Pre & Fine/Bag Filter.jpg'
        ),
        "128" => array(            
            'name' => 'EPA, HEPA & ULPA Filters',
            'code' => '128',
            'image' => 'images/product-images/AHU Filter/EPA, HEPA, ULPA/Compact Filters (Box Type).jpg'
        ), 
        "129" => array(            
            'name' => 'Gas Phase/ Molecular Filters',
            'code' => '129',
            'image' => 'images/product-images/AHU Filter/Gas Phase/Filter Beds.jpg'
        ),
        "130" => array(            
            'name' => 'High Temperature Filters',
            'code' => '130',
            'image' => 'images/product-images/AHU Filter/High temp/Compact Filters (350 degrees C).jpg'
        ),   


        // Dispensers -> Soap & Sanitiser Dispenser -> ABS Plastic Dispenser (2)

        "131" => array(            
            'name' => 'Delta Automatic Spray Sanitiser dispenser (1000 ml) - DSA-006-S-AT',
            'code' => '131',
            'image' => 'images/product-images/Dispensers/soap dispenser/ABS/DSA-006-S-AT.jpg'
        ),
        "132" => array(            
            'name' => 'Delta Automatic Sanitiser Spray Dispenser (2400ml) - DSA-023-S-AT',
            'code' => '132',
            'image' => 'images/product-images/Dispensers/soap dispenser/ABS/DSA-023-S-AT.jpg'
        ), 


        // Dispensers -> Soap & Sanitiser Dispenser -> Stainless Steel Dispenser (6) 

        "133" => array(            
            'name' => 'Delta SS Automatic Soap/Sanitiser Dispenser (900 ml) - DSS-001-AT',
            'code' => '133',
            'image' => 'images/product-images/Dispensers/soap dispenser/SS/DSS-001-AT.jpg'
        ),
        "134" => array(            
            'name' => 'Delta SS Soap Dispenser (500ml) - DSS-002',
            'code' => '134',
            'image' => 'images/product-images/Dispensers/soap dispenser/SS/DSS-002.jpg'
        ),  
        "135" => array(            
            'name' => 'Delta SS Soap Dispenser (800ml) - DSS-003',
            'code' => '135',
            'image' => 'images/product-images/Dispensers/soap dispenser/SS/DSS-003.jpg'
        ),
        "136" => array(            
            'name' => 'Delta SS Soap Dispenser (1000ml) - DSS-004',
            'code' => '136',
            'image' => 'images/product-images/Dispensers/soap dispenser/SS/DSS-004.jpg'
        ), 
        "137" => array(            
            'name' => 'Delta SS Soap Dispenser Horizontal (1000ml) - DSS-005',
            'code' => '137',
            'image' => 'images/product-images/Dispensers/soap dispenser/SS/DSS-005.jpg'
        ),
        "138" => array(            
            'name' => 'Delta SS Automatic Soap/Sanitiser Dispenser (700 ml) - DSS-009-AT',
            'code' => '138',
            'image' => 'images/product-images/Dispensers/soap dispenser/SS/DSS-009-AT.jpg'
        ),


        // Dispensers -> Paper Dispensers -> ABS Plastic Dispensers (4)

        "139" => array(            
            'name' => 'Delta M-Fold Paper Towel Dispenser (White) - DPA-001',
            'code' => '139',
            'image' => 'images/product-images/Dispensers/Paper Tissue Dispenser/DPA-001.jpg'
        ),
        "140" => array(            
            'name' => 'Delta M-Fold Towel Dispenser (Premium) - DPA-002',
            'code' => '140',
            'image' => 'images/product-images/Dispensers/Paper Tissue Dispenser/DPA-002.jpg'
        ),  
        "141" => array(            
            'name' => 'Delta HRT Roll Dispenser (Slim) - DPA-004',
            'code' => '141',
            'image' => 'images/product-images/Dispensers/Paper Tissue Dispenser/DPA-004.jpg'
        ),
        "142" => array(            
            'name' => 'Delta Cube Napkin Dispenser (White) - DPA-006',
            'code' => '142',
            'image' => 'images/product-images/Dispensers/Paper Tissue Dispenser/DPA-006.jpg'
        ), 


        // Dispensers -> Paper Dispensers -> Stainless Steel Dispenser (1)

        "143" => array(            
            'name' => 'Delta Kitchen Roll Dispenser - DPS-001',
            'code' => '143',
            'image' => 'images/product-images/Dispensers/Paper Tissue Dispenser/DPS-001.jpg'
        ),   

        // Dispensers -> Air Freshener Dispensers (1) 

        "144" => array(            
            'name' => 'Automatic Air Freshner Dispenser LCD - DAF-001',
            'code' => '144',
            'image' => 'images/product-images/Dispensers/Dry Vacuum/BV-5_1.png'
        ),


        // Hand Dryers -> ABS Plastic Hand Dryers (5)

        "145" => array(            
            'name' => 'Delta ABS Hand dryer (1000W) - HDA-001',
            'code' => '145',
            'image' => 'images/product-images/Hand dryer/ABS Hand Dryer/HDA 001.jpg'
        ),
        "146" => array(            
            'name' => 'Delta ABS Jet Hand Dryer Brushless Motor - HDA-002',
            'code' => '146',
            'image' => 'images/product-images/Hand dryer/ABS Hand Dryer/HDA 002-J.jpg'
        ),  
        "147" => array(            
            'name' => 'Delta ABS Hand dryer (1500W) - HDA-003',
            'code' => '147',
            'image' => 'images/product-images/Hand dryer/ABS Hand Dryer/HDA 003.jpg'
        ),
        "148" => array(            
            'name' => 'Delta ABS Jet Hand dryer (2000W) - HDA-004',
            'code' => '148',
            'image' => 'images/product-images/Hand dryer/ABS Hand Dryer/HDA-004.jpg'
        ), 
        "149" => array(            
            'name' => 'Delta ABS Hand dryer (1000W) - HDA-006',
            'code' => '149',
            'image' => 'images/product-images/Hand dryer/ABS Hand Dryer/HDA 006.jpg'
        ),
        

        // Hand Dryers -> Stainless Steel Hand Dryers (8)

        "150" => array(            
            'name' => 'Delta SS Hand Dryer (1800W) - HDS-001',
            'code' => '150',
            'image' => 'images/product-images/Hand dryer/SS Hand Dryer/HDS 001.jpg'
        ),
        "151" => array(            
            'name' => 'Delta SS Hand Dryer (1800W) - HDS-002',
            'code' => '151',
            'image' => 'images/product-images/Hand dryer/SS Hand Dryer/HDS 002.jpg'
        ),
        "152" => array(            
            'name' => 'Delta SS Hand Dryer (2500 W) - HDS-003',
            'code' => '152',
            'image' => 'images/product-images/Hand dryer/SS Hand Dryer/HDS 003.jpg'
        ),  
        "153" => array(            
            'name' => 'Delta SS Hand Dryer (2100 W) - HDS-004',
            'code' => '153',
            'image' => 'images/product-images/Hand dryer/SS Hand Dryer/HDS 004.jpg'
        ),
        "154" => array(            
            'name' => 'Delta SS Hand Dryer (1650W) - HDS-005',
            'code' => '154',
            'image' => 'images/product-images/Hand dryer/SS Hand Dryer/HDS 005.jpg'
        ), 
        "155" => array(            
            'name' => 'Delta SS Jet Hand Dryer - HDS-006-J',
            'code' => '155',
            'image' => 'images/product-images/Hand dryer/SS Hand Dryer/HDS 006-J.jpg'
        ),
        "156" => array(            
            'name' => 'Delta SS Hand Dryer (2000 W) - HDS-007',
            'code' => '156',
            'image' => 'images/product-images/Hand dryer/SS Hand Dryer/HDS 007.jpg'
        ),
        "157" => array(            
            'name' => 'Delta SS Hand Dryer (950 W) - HDS-008',
            'code' => '157',
            'image' => 'images/product-images/Hand dryer/SS Hand Dryer/HDS 008.jpg'
        ),


        // Cleaning Consumables -> Cleaning Chemicals -> Housekeeping New Product (1)

        "158" => array(            
            'name' => 'Glass Cleaner Concentrate - Ross GC',
            'code' => '158',
            'image' => 'images/product-images/Cleaning Chemicals/Housekeeping/ross-GC.png'
        ),

        
        // Cleaning Consumables -> Paper Tissue New Product (2)

        "159" => array(            
            'name' => 'Kitchen Roll - PT-011',
            'code' => '159',
            'image' => 'images/product-images/Paper Tissue/4 Kitchen Roll.jpg'
        ),        
        "160" => array(            
            'name' => 'Kitchen Roll - PT-013',
            'code' => '160',
            'image' => 'images/product-images/Paper Tissue/4 Kitchen Roll.jpg'
        ),  


        // Dispensers -> Soap & Sanitiser Dispenser -> ABS Plastic Dispenser New Product (8)

        "161" => array(            
            'name' => 'Delta Spray Dispenser (400ml) - DSA-007-S',
            'code' => '161',
            'image' => ''
        ),
        "162" => array(            
            'name' => 'Delta Soap Dispenser (2 Chamber-400ml x 2) - DSA-019',
            'code' => '162',
            'image' => 'images/product-images/Dispensers/soap dispenser/ABS/DSA-019.jpg'
        ), 
        "163" => array(            
            'name' => 'Delta Soap Dispenser (3 Chamber-400ml x 3) - DSA-020',
            'code' => '163',
            'image' => 'images/product-images/Dispensers/soap dispenser/ABS/DSA-020.jpg'
        ),
        "164" => array(            
            'name' => 'Delta Spray Dispenser (800ml) - DSA-024-S',
            'code' => '164',
            'image' => 'images/product-images/Dispensers/soap dispenser/ABS/DSA-024-S.jpg'
        ),
        "165" => array(            
            'name' => 'Delta Soap/ Sanitiser Dispenser (500ml) - DSA-025',
            'code' => '165',
            'image' => 'images/product-images/Dispensers/soap dispenser/ABS/DSA-025.jpg'
        ),
        "166" => array(            
            'name' => 'Delta Soap/ Sanitiser Dispenser (1000ml) - DSA-026',
            'code' => '166',
            'image' => 'images/product-images/Dispensers/soap dispenser/ABS/DSA-026.jpg'
        ),
        "167" => array(            
            'name' => 'Delta Automatic Soap/Sanitiser dispenser (1000 ml) - DSA-006-AT',
            'code' => '167',
            'image' => ''
        ),  
        "168" => array(            
            'name' => 'Delta Auomatic Soap/Sanitiser Dispenser (1000 ml) - DSA-027-AT',
            'code' => '168',
            'image' => 'images/product-images/Dispensers/soap dispenser/ABS/DSA-027-AT.jpg'
        ),    


        // Floor Matting (15)
        
        "169" => array(            
            'name' => '3M 2350 Matting - Vinyl Green',
            'code' => '169',
            'image' => 'images/product-images/Floor matting/2350 green cushion mat.jpg'
        ),
        "170" => array(            
            'name' => '3M Nomad Aqua Medium Duty - 6500',
            'code' => '170',
            'image' => 'images/product-images/Floor matting/3M 6500 AQUA MAT MED DUTY.jpg'
        ),
        "171" => array(            
            'name' => '3M Nomed-8850 Aqua Heavy Duty Matting (Grey)',
            'code' => '171',
            'image' => 'images/product-images/Floor matting/3m-8850.jpg'
        ),  
        "172" => array(            
            'name' => '3M Nomad Terra Loop Medium Duty Matting - 6850',
            'code' => '172',
            'image' => 'images/product-images/Floor matting/3M 6850.jpg'
        ),
        "173" => array(            
            'name' => '3M NomadTerra Loop Heavy Duty Matting - 7150',
            'code' => '173',
            'image' => 'images/product-images/Floor matting/3m 7150.jpg'
        ),         
        "174" => array(            
            'name' => '3M Nomed Z- Web Medium Duty - 3200',
            'code' => '174',
            'image' => 'images/product-images/Floor matting/3m 3200 z web.jpg'
        ),        
        "175" => array(            
            'name' => '3M Z-Web Heavy Duty Matting - 9100',
            'code' => '175',
            'image' => 'images/product-images/Floor matting/3m 9100.jpg'
        ),
        "176" => array(            
            'name' => 'Delta Footwear Sanitising Mat - FSM-001',
            'code' => '176',
            'image' => 'images/product-images/Floor matting/'
        ),  
        "177" => array(            
            'name' => 'Delta Rubber Hole Mat - FM-001',
            'code' => '177',
            'image' => 'images/product-images/Floor matting/FM-001.jpg'
        ),
        "178" => array(            
            'name' => 'Delta Rubber Hole Mat 1mtr x 1.5mtr -Premium - FM-002',
            'code' => '178',
            'image' => 'images/product-images/Floor matting/'
        ), 
        "179" => array(            
            'name' => 'Delta PVC Mats Ribbed - FM-003',
            'code' => '179',
            'image' => 'images/product-images/Floor matting/FM-003.jpg'
        ),
        "180" => array(            
            'name' => 'Delta PVC Mats Ribbed (3 mtr roll) - FM-004',
            'code' => '180',
            'image' => 'images/product-images/Floor matting/FM-004.jpg'
        ),
        "181" => array(            
            'name' => 'Delta Customised Logo Mat - FM-005',
            'code' => '181',
            'image' => 'images/product-images/Floor matting/FM-005.jpg'
        ),
        "182" => array(            
            'name' => 'Delta Aluminium Carpet Mat - FM-007',
            'code' => '182',
            'image' => 'images/product-images/Floor matting/FM-007.jpg'
        ),
        "183" => array(            
            'name' => 'Delta Cusion/Loop Matting - FM-008',
            'code' => '183',
            'image' => 'images/product-images/Floor matting/FM-008-BG.jpg'
        ),    


        // Waste Management -> Stainless Steel Dustbin (7)

        "184" => array(            
            'name' => 'Open Plain Dustbin',
            'code' => '184',
            'image' => 'images/product-images/Waste Management/SS Dustbin/SS Plain Dustbin.jpg'
        ),
        "185" => array(            
            'name' => 'Open Perforated Dustbin',
            'code' => '185',
            'image' => 'images/product-images/Waste Management/SS Dustbin/SS Perforated Dustbin.jpg'
        ),
        "186" => array(            
            'name' => 'Pedal Dustbin',
            'code' => '186',
            'image' => 'images/product-images/Waste Management/SS Dustbin/SS Pedal Dustbin.jpg'
        ),
        "187" => array(            
            'name' => 'Swing Dustbin',
            'code' => '187',
            'image' => 'images/product-images/Waste Management/SS Dustbin/SS Swing Dustbin.jpg'
        ),
        "188" => array(            
            'name' => 'Ashtray Dustbin',
            'code' => '188',
            'image' => 'images/product-images/Waste Management/SS Dustbin/SS Ash Can Dustbin.jpg'
        ),
        "189" => array(            
            'name' => '2 Chamber Dustbin',
            'code' => '189',
            'image' => ''
        ),
        "190" => array(            
            'name' => '3 Chamber Dustbin',
            'code' => '190',
            'image' => ''
        ),               
         

        // Cleaning Tools -> Scrub (8)

        "191" => array(            
            'name' => '3M Floor Pad 17"',
            'code' => '191',
            'image' => 'images/product-images/Cleaning Tools/Scrubs/17inch pads/3m pads white.jpg'
        ),        
        "192" => array(            
            'name' => '3M Floor Pads 20"',
            'code' => '192',
            'image' => 'images/product-images/Cleaning Tools/Scrubs/20inch pads/3m pads green.jpg'
        ),        
        "193" => array(            
            'name' => '3M Floor Pad 17" - Clean & Shine',
            'code' => '193',
            'image' => 'images/product-images/Cleaning Tools/Scrubs/CLEAN & SHINE PAD.jpg'
        ),  
        "194" => array(            
            'name' => '3M Light Duty Pad White',
            'code' => '194',
            'image' => 'images/product-images/Cleaning Tools/Scrubs/Light Duty Pad.jpg'
        ),        
        "195" => array(            
            'name' => '3M Scotch Brite 2 In1 Scrub Sponge',
            'code' => '195',
            'image' => 'images/product-images/Cleaning Tools/Scrubs/scrub sponge 2-in-1.jpg'
        ),
        "196" => array(            
            'name' => '3M Scotch Brite Heavy Duty',
            'code' => '196',
            'image' => 'images/product-images/Cleaning Tools/Scrubs/Heavy Duty Pad.jpg'
        ),
        "197" => array(            
            'name' => '3M Scotch Brite Power Pad',
            'code' => '197',
            'image' => 'images/product-images/Cleaning Tools/Scrubs/Power Pad.jpg'
        ),
        "198" => array(            
            'name' => '3M Scotch Brite Scrub Pad',
            'code' => '198',
            'image' => 'images/product-images/Cleaning Tools/Scrubs/Scrub pad.jpg'
        ),

        // Shift to Cleaning Consumables > Cleaning Chemicals > Housekeeping (2)
        
        "199" => array(            
            'name' => '3M Stainless Steel Cleaner',
            'code' => '199',
            'image' => 'images/product-images/Cleaning Tools/Scrubs/3M Stainless Steel Cleaner.jpg'
        ),
        "200" => array(            
            'name' => '3M Sharpshooter with Triggers',
            'code' => '200',
            'image' => 'images/product-images/Cleaning Tools/Scrubs/Sharpshooter.jpg'
        ),


        // Cleaning Tools -> Wipes (4)

        "201" => array(            
            'name' => 'Delta Microfiber Cloth - LD',
            'code' => '201',
            'image' => 'images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-002 YW.jpg'
        ),
        "202" => array(            
            'name' => 'Delta Microfiber Cloth - SD',
            'code' => '202',
            'image' => 'images/product-images/Cleaning Tools/Wipes/microfibre cloth/TWP-003 RD.jpg'
        ),
        "203" => array(            
            'name' => '3M Microfiber Cloth',
            'code' => '203',
            'image' => 'images/product-images/Cleaning Tools/Wipes/microfibre cloth/3M MICROFIBER CLOTH - BLUE.jpg'
        ),
        "204" => array(            
            'name' => '3M Sponge Wipe',
            'code' => '204',
            'image' => 'images/product-images/Cleaning Tools/Wipes/Sponge Wipe.jpg'
        ),


        // Cleaning Tools -> Mops & Handles (16)

        "205" => array(            
            'name' => 'Delta Aluminium Dust Mop Frame - TM-001',
            'code' => '205',
            'image' => 'images/product-images/Cleaning Tools/Mops/TM-001.jpg'
        ),
        "206" => array(            
            'name' => 'Delta Aluminium Dust Mop Frame - TM-003',
            'code' => '206',
            'image' => 'images/product-images/Cleaning Tools/Mops/TM-003.jpg'
        ),
        "207" => array(            
            'name' => 'Delta Aluminium Dust Mop Frame - TM-005',
            'code' => '207',
            'image' => 'images/product-images/Cleaning Tools/Mops/TM-005.jpg'
        ),
        "208" => array(            
            'name' => 'Delta Aluminium Dust Mop Refill - TM-002-BL',
            'code' => '208',
            'image' => 'images/product-images/Cleaning Tools/Mops/TM-002-BL.jpg'
        ),
        "209" => array(            
            'name' => 'Delta Aluminium Dust Mop Refill - TM-004-BL',
            'code' => '209',
            'image' => 'images/product-images/Cleaning Tools/Mops/TM-004-BL.jpg'
        ),
        "210" => array(            
            'name' => 'Delta Aluminium Dust Mop Refill - TM-006-BL',
            'code' => '210',
            'image' => 'images/product-images/Cleaning Tools/Mops/TM-006-BL.jpg'
        ),
        "211" => array(            
            'name' => 'Delta Acrylic Mop Frame - TM-007',
            'code' => '211',
            'image' => 'images/product-images/Cleaning Tools/Mops/Acrylic Dust mop frame.jpg'
        ),
        "212" => array(            
            'name' => 'Delta Acrylic Mop Refill - TM-008',
            'code' => '212',
            'image' => 'images/product-images/Cleaning Tools/Mops/acrylic dust mop refill.jpg'
        ),
        "213" => array(            
            'name' => 'Delta Kent Mop Frame - TM-009',
            'code' => '213',
            'image' => 'images/product-images/Cleaning Tools/Mops/TM-009-RD.jpg'
        ),
        "214" => array(            
            'name' => 'Delta Kent Mop Cotton Refill - TM-010 ',
            'code' => '214',
            'image' => 'images/product-images/Cleaning Tools/Mops/TM-010.jpg'
        ),
        "215" => array(            
            'name' => 'Delta Kent Mop Cotton Refill - TM-011 ',
            'code' => '215',
            'image' => 'images/product-images/Cleaning Tools/Mops/kent mop refill blue.jpg'
        ),
        "216" => array(            
            'name' => 'Delta Kent Mop Microfiber Refill - TM-012',
            'code' => '216',
            'image' => 'images/product-images/Cleaning Tools/Mops/TM-012-BL.jpg'
        ),
        "217" => array(            
            'name' => 'Delta Break Mop Frame - TM-013',
            'code' => '217',
            'image' => 'images/product-images/Cleaning Tools/Mops/Delta break mop frame.jpg'
        ),
        "218" => array(            
            'name' => 'Delta Break Mop Refill - TM-014',
            'code' => '218',
            'image' => 'images/product-images/Cleaning Tools/Mops/TM-014-BL.jpg'
        ),       

        "219" => array(            
            'name' => 'Delta Aluminium Handle - TH-001',
            'code' => '219',
            'image' => 'images/product-images/Cleaning Tools/Handles/TH-001.jpg'
        ),
        "220" => array(            
            'name' => 'Vileda Telescopic Handle',
            'code' => '220',
            'image' => 'images/product-images/Cleaning Tools/Handles/TH-002.jpg'
        ),


        // Cleaning Tools -> Brush (8)

        "221" => array(            
            'name' => 'IPC Plastic Sweeper',
            'code' => '221',
            'image' => 'images/product-images/Cleaning Tools/Brush/IPC-Plastic-Sweeper.jpg'
        ),
        "222" => array(            
            'name' => 'Delta Hard Floor Brush - TB-001',
            'code' => '222',
            'image' => 'images/product-images/Cleaning Tools/Brush/TB-001.jpg'
        ),
        "223" => array(            
            'name' => 'Delta Wooden Sweeping Broom - TB-002',
            'code' => '223',
            'image' => 'images/product-images/Cleaning Tools/Brush/TB-002.jpg'
        ),
        "224" => array(            
            'name' => 'Delta Carpet Brush (Hard) - TB-003',
            'code' => '224',
            'image' => 'images/product-images/Cleaning Tools/Brush/TB-003.jpg'
        ),
        "225" => array(            
            'name' => 'Delta Carpet Brush (Soft) - TB-004',
            'code' => '225',
            'image' => 'images/product-images/Cleaning Tools/Brush/TB-004.jpg'
        ),
        "226" => array(            
            'name' => 'Delta Cobweb Brush (Pipe) - TB-005',
            'code' => '226',
            'image' => 'images/product-images/Cleaning Tools/Brush/TB-005.jpg'
        ),
        "227" => array(            
            'name' => 'Delta Cobweb Brush (Fan) - TB-006',
            'code' => '227',
            'image' => 'images/product-images/Cleaning Tools/Brush/TB-006.jpg'
        ),
        "228" => array(            
            'name' => 'Delta Closed Dustpan with Brush Set - TB-007',
            'code' => '228',
            'image' => 'images/product-images/Cleaning Tools/Brush/TB-007.jpg'
        ),


        // Cleaning Tools -> Squegee (4)

        "229" => array(            
            'name' => 'Delta Floor Squeegee SS with Handle - TS-001',
            'code' => '229',
            'image' => 'images/product-images/Cleaning Tools/Squegee/TS-001.jpg'
        ),
        "230" => array(            
            'name' => 'Delta Floor Squeegee - TS-002',
            'code' => '230',
            'image' => 'images/product-images/Cleaning Tools/Squegee/TS-002.jpg'
        ),
        "231" => array(            
            'name' => 'Delta Floor Squeegee - TS-003',
            'code' => '231',
            'image' => 'images/product-images/Cleaning Tools/Squegee/TS-003.jpg'
        ),
        "232" => array(            
            'name' => 'Delta Floor Squeeze – Blk Foam - TS-004',
            'code' => '232',
            'image' => 'images/product-images/Cleaning Tools/Squegee/TS-004.jpg'
        ),


        // Cleaning Tools -> Window (14)

        "233" => array(            
            'name' => 'IPC Window Combi',
            'code' => '233',
            'image' => 'images/product-images/Cleaning Tools/Window/IPC MICROTIGER.jpg'
        ),
        "234" => array(            
            'name' => 'Delta Window Squeegee - TWD-001',
            'code' => '234',
            'image' => 'images/product-images/Cleaning Tools/Window/TWD-001.jpg'
        ),
        "235" => array(            
            'name' => 'Delta Window Squeegee - TWD-002',
            'code' => '235',
            'image' => 'images/product-images/Cleaning Tools/Window/TWD-002.jpg'
        ),
        "236" => array(            
            'name' => 'Delta Window Washer - TWD-003',
            'code' => '236',
            'image' => 'images/product-images/Cleaning Tools/Window/TWD-003.jpg'
        ),
        "237" => array(            
            'name' => 'Delta Window Washer Refill - TWD-004',
            'code' => '237',
            'image' => 'images/product-images/Cleaning Tools/Window/TWD-004.jpg'
        ),
        "238" => array(            
            'name' => 'Delta Window Combi- TWD-005',
            'code' => '238',
            'image' => 'images/product-images/Cleaning Tools/Window/TWD-005.jpg'
        ),
        "239" => array(            
            'name' => 'Delta Rubber Strip - TWD-006',
            'code' => '239',
            'image' => 'images/product-images/Cleaning Tools/Window/TWD-006.jpg'
        ),
        "240" => array(            
            'name' => 'Delta Window Cleaning Trolley - TWD-007',
            'code' => '240',
            'image' => 'images/product-images/Cleaning Tools/Window/TWD-007.jpg'
        ),
        "241" => array(            
            'name' => 'Delta Floor Scrapper - TWD-008',
            'code' => '241',
            'image' => 'images/product-images/Cleaning Tools/Window/TWD-008.jpg'
        ),
        "242" => array(            
            'name' => 'Delta Floor Scrapper Blade - TWD-009 ',
            'code' => '242',
            'image' => 'images/product-images/Cleaning Tools/Window/TWD-009.jpg'
        ),
        "243" => array(            
            'name' => 'Delta Mini Scrapper - TWD-010 ',
            'code' => '243',
            'image' => 'images/product-images/Cleaning Tools/Window/TWD-010.jpg'
        ),
        "244" => array(            
            'name' => 'Delta Mini Scrapper Blade - TWD-011',
            'code' => '244',
            'image' => 'images/product-images/Cleaning Tools/Window/TWD-011.jpg'
        ),
        "245" => array(            
            'name' => 'Delta Telescopic Pole - TWD-012',
            'code' => '245',
            'image' => 'images/product-images/Cleaning Tools/Window/TWD-012.jpg'
        ),
        "246" => array(            
            'name' => 'Delta Telescopic Pole - TWD-013',
            'code' => '246',
            'image' => 'images/product-images/Cleaning Tools/Window/TWD-013.jpg'
        ),


        // Cleaning Tools -> Wringer Trolley (7)

        "247" => array(            
            'name' => 'Delta Wringer Trolley (20 Ltr) - TWT-001',
            'code' => '247',
            'image' => 'images/product-images/Cleaning Tools/Wringer Trolley/TWT-001.jpg'
        ),
        "248" => array(            
            'name' => 'Delta Wringer Trolley (33 Ltr) - TWT-002',
            'code' => '248',
            'image' => 'images/product-images/Cleaning Tools/Wringer Trolley/TWT-002.jpg'
        ),
        "249" => array(            
            'name' => 'Delta Wringer Trolley (34 Ltr) - TWT-004',
            'code' => '249',
            'image' => 'images/product-images/Cleaning Tools/Wringer Trolley/TWT-004.jpg'
        ),
        "250" => array(            
            'name' => 'Delta Wringer Trolley (50 Ltr) - TWT-005',
            'code' => '250',
            'image' => 'images/product-images/Cleaning Tools/Wringer Trolley/TWT-005.jpg'
        ),
        "251" => array(            
            'name' => 'Delta Wringer Trolley (50 Ltr) - TWT-006',
            'code' => '251',
            'image' => 'images/product-images/Cleaning Tools/Wringer Trolley/TWT-006.jpg'
        ),
        "252" => array(            
            'name' => 'Vileda Ultraspeed Pro Wringer Trolley (33 Ltr)- TWT-008',
            'code' => '252',
            'image' => 'images/product-images/Cleaning Tools/Wringer Trolley/TWT-008.jpg'
        ),
        "253" => array(            
            'name' => 'Vileda Vertical Press Wringer trolley (33 Ltr) - TWT-009',
            'code' => '253',
            'image' => 'images/product-images/Cleaning Tools/Wringer Trolley/TWT-009.jpg'
        ),


        // Cleaning Tools -> Cart (4)

        "254" => array(            
            'name' => 'Delta Janitor Cart - TC-001',
            'code' => '254',
            'image' => 'images/product-images/Cleaning Tools/Cart/TC-001.jpg'
        ),
        "255" => array(            
            'name' => 'Delta X-Trolley/Laundry Trolley - TC-002',
            'code' => '255',
            'image' => 'images/product-images/Cleaning Tools/Cart/TC-002.jpg'
        ),
        "256" => array(            
            'name' => 'Delta Pre Wet Mop Box with Lid - TC-003',
            'code' => '256',
            'image' => 'images/product-images/Cleaning Tools/Cart/TC-003.jpg'
        ),
        "257" => array(            
            'name' => 'Vileda Voleo Pro Trolley',
            'code' => '257',
            'image' => 'images/product-images/Cleaning Tools/Cart/2 VoleoPro Trolley.jpg'
        ),

        
        // Waste Management -> Plastic Dustbin (21)

        "258" => array(            
            'name' => 'Dustbin - 660 ltr',
            'code' => '258',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "259" => array(            
            'name' => 'Dustbin - 1100 ltr',
            'code' => '259',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "260" => array(            
            'name' => 'Fabricated Pedal & Wheel Dustbin - 120 ltr',
            'code' => '260',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "261" => array(            
            'name' => 'Fabricated Pedal & Wheel Dustbin - 240 ltr',
            'code' => '261',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "262" => array(            
            'name' => 'Litter Dome Bin - 110 ltr',
            'code' => '262',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "263" => array(            
            'name' => 'Round Dustbin - 10 ltr',
            'code' => '263',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "264" => array(            
            'name' => 'Swing Dustbin - 25 ltr',
            'code' => '264',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "265" => array(            
            'name' => 'Swing Dustbin - 60 ltr',
            'code' => '265',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "266" => array(            
            'name' => 'Dustbin without Pedal - 120 ltr',
            'code' => '266',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "267" => array(            
            'name' => 'Dustbin without Pedal - 240 ltr',
            'code' => '267',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "268" => array(            
            'name' => 'Dustbin with Pedal - 10 ltr',
            'code' => '268',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "269" => array(            
            'name' => 'Dustbin with Pedal - 15 ltr',
            'code' => '269',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "270" => array(            
            'name' => 'Dustbin with Pedal - 20 ltr',
            'code' => '270',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "271" => array(            
            'name' => 'Dustbin with Pedal - 30 ltr',
            'code' => '271',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "272" => array(            
            'name' => 'Dustbin with Pedal - 50 ltr',
            'code' => '272',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "273" => array(            
            'name' => 'Dustbin with Pedal - 65 ltr',
            'code' => '273',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "274" => array(            
            'name' => 'Dustbin with Pedal - 90 ltr',
            'code' => '274',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ), 
        "275" => array(            
            'name' => 'Dustbin with Pedal & Wheel - 60 ltr',
            'code' => '275',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "276" => array(            
            'name' => 'Dustbin with Pedal & Wheel - 80 ltr',
            'code' => '276',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),
        "277" => array(            
            'name' => 'Dustbin with Pedal & Wheel - 120 ltr',
            'code' => '277',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),               
        "278" => array(            
            'name' => 'Round Dustbin with Lid - 80 ltr',
            'code' => '278',
            'image' => 'images/product-images/Waste Management/Plastic Dustbin/'
        ),


        // Fabric Protection -> DIY Cans (5)

        "279" => array(            
            'name' => 'Scotchgard™ Fabric & Carpet Cleaner 16.5 oz (467 g)',
            'code' => '279',
            'image' => 'images/product-images/Fabric Protection/DIY Cans/fabric and carpet.jpg'
        ), 
        "280" => array(            
            'name' => 'Scotchgard™ Fabric Water Shield',
            'code' => '280',
            'image' => 'images/product-images/Fabric Protection/DIY Cans/fabric water shield.jpg'
        ),
        "281" => array(            
            'name' => 'Scotchgard™ OXY Spot & Stain Remover for Carpet & Fabric',
            'code' => '281',
            'image' => 'images/product-images/Fabric Protection/DIY Cans/scotchgard-oxy.jpg'
        ),
        "282" => array(            
            'name' => 'Scotchgard™ Rug & Carpet Protector',
            'code' => '282',
            'image' => 'images/product-images/Fabric Protection/DIY Cans/rug and carpet protector.jpg'
        ),               
        "283" => array(            
            'name' => 'Scotchgard™ Leather and Suede and Nubuck Protector',
            'code' => '283',
            'image' => 'images/product-images/Fabric Protection/DIY Cans/leather and suede protector.jpg'
        ),
        "284" => array(            
            'name' => '3M Scotchgard Fabric Protection treatment',
            'code' => '284',
            'image' => 'images/product-images/Fabric Protection/Professional Treatment/IMG_5231.JPG'
        ),


        // Cleaning Tools -> Wipes New Product (7)

        "285" => array(            
            'name' => 'Vileda MicronQuick',
            'code' => '285',
            'image' => 'images/product-images/Cleaning Tools/Wipes/Vileda MIcronQuick.jpg'
        ),
        "286" => array(            
            'name' => 'Vileda NanoTech Micro',
            'code' => '286',
            'image' => 'images/product-images/Cleaning Tools/Wipes/11 Vileda NanoTech micro.jpg'
        ),
        "287" => array(            
            'name' => 'Vileda MicroGlass',
            'code' => '287',
            'image' => 'images/product-images/Cleaning Tools/Wipes/vileda MicroGlass.jpg'
        ),
        "288" => array(            
            'name' => 'Vileda PVAmicro',
            'code' => '288',
            'image' => 'images/product-images/Cleaning Tools/Wipes/13 Vileda PVAmicro.jpg'
        ),
        "289" => array(            
            'name' => 'Vileda MicronSolo',
            'code' => '289',
            'image' => 'images/product-images/Cleaning Tools/Wipes/vileda micronsolo.jpg'
        ),
        "290" => array(            
            'name' => 'Vileda SpillEx',
            'code' => '290',
            'image' => 'images/product-images/Cleaning Tools/Wipes/Vileda Spillex.jpg'
        ),
        "291" => array(            
            'name' => 'Vileda MultiDuster',
            'code' => '291',
            'image' => 'images/product-images/Cleaning Tools/Wipes/vileda multiduster 3.jpg'
        ),

        // Cleaning Tools -> Scrub New Product (2)

        "292" => array(            
            'name' => 'Vileda PurActive"',
            'code' => '292',
            'image' => 'images/product-images/Cleaning Tools/Scrubs/Vileda PurActive.jpg'
        ),        
        "293" => array(            
            'name' => 'Vileda Miraclean"',
            'code' => '293',
            'image' => 'images/product-images/Cleaning Tools/Scrubs/15 Vileda Miraclean.jpg'
        ),


        // Cleaning Tools -> Mops & Handles New Product (6)

        "294" => array(            
            'name' => 'ViledaSwep Duo & Swep Duo Plus Mop Frame',
            'code' => '294',
            'image' => 'images/product-images/Cleaning Tools/Mops/Vileda swep duo & swep duo plus mop frame.jpg'
        ),
        "295" => array(            
            'name' => 'Vileda Swep Single MicroCombi Refill',
            'code' => '295',
            'image' => 'images/product-images/Cleaning Tools/Mops/Vileda Swep Single MicroCombi Refill.jpg'
        ),
        "296" => array(            
            'name' => 'Vileda Swep Duo MicroTech Refill',
            'code' => '296',
            'image' => 'images/product-images/Cleaning Tools/Mops/Vileda Swep Duo MicroTech Refill.jpg'
        ),
        "297" => array(            
            'name' => 'Vileda UltraSpeed Pro Frame',
            'code' => '297',
            'image' => 'images/product-images/Cleaning Tools/Mops/Vileda UltraSpeed Pro Frame.jpg'
        ),
        "298" => array(            
            'name' => 'Vileda BaseLoop',
            'code' => '298',
            'image' => 'images/product-images/Cleaning Tools/Mops/Vileda Baseloop.jpg'
        ),
        "299" => array(            
            'name' => 'Vileda UltraSpeed Trio Mop',
            'code' => '299',
            'image' => 'images/product-images/Cleaning Tools/Mops/Vileda UltraSpeed Trio Mop.jpg'
        )
        
        

        // Total Active Products -> 296
        

    );

    public function getAllProduct()
    {
        return $this->productArray;
    }
}
