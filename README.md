Trait Debug for ontime

The OnTime framework is designed to be modular, scalable and comprehensive, so that each new feature integrates without difficulty and maintains a unique class definition (OnTime) and all "additional classes" are "trait" that enrich it, in such a way that an integrated system is obtained, not separate programs which do not necessarily have to behave correctly together.

Installation in test environment:

1.- Copy all the files in the directory where was instaled ontrime core

2.- With the browser of your preference, locate the directory and enter it

3.- Execute the OntimeInstallerDebug.php file

4.- When executing the file,  the files where moved and the required environment was created

Recommendations:

If you know how to create a subdomain that points to the "demo" directory, it is more comfortable and realistic.

After install

When installing, the necessary environment is defined to define access security, I create a User called "Admin" and that his password is "OT2021Free", this environment left the class prepared for the control of Groups

The debug trait, let you follow the trace of anythig, have diferente levels, could store error, and advanced tracer that let see you basic information (just the public functions) and advanced (all private functions that are called inside), can save like user or for all system, also can choose the output, to screen at the same time that the code is running, to memory when you decide see what happens and to disk on line, creating log files.
Can see and delete logs
 

mario.carrocera@hotmail.com
**********+++++++++++
Debug Demo
**********+++++++++++

**********+++++++++++
start debug with default, system, disk
**********+++++++++++


Start!!!

**********+++++++++++
stop debug
**********+++++++++++

DbgStr()
Stop!!!

**********+++++++++++
Show logs
**********+++++++++++

DbgShw('')
0D.- 1=>log_system.20210227
**********+++++++++++
Show 1rst log
**********+++++++++++

DbgShwLog('log_system.20210227')
1.- 000000603b15133f2366.57186137 :
__________1D.- kind=>Out
__________1D.- in=>DebugA::DbgStr
__________1D.- from=>DbgStr
----------2.- param :
__________1D.- return=>1
1.- 000000603b15134210e8.41416637 :
__________1D.- kind=>Out
__________1D.- in=>Allways::DiscConnect
__________1D.- from=>DiscConnect
----------2.- param :
__________1D.- return=>1
1.- 000000603b1513423ed0.18922876 :
__________1D.- kind=>Out
__________1D.- in=>Allways::Connect
__________1D.- from=>Connect
----------2.- param :
____________________2D.- 0=>admix
____________________2D.- 1=>OT2021Free
__________1D.- return=>
1.- 000000603b15134271c9.03152388 :
__________1D.- kind=>Out
__________1D.- in=>Allways::MySafety
__________1D.- from=>MySafety
----------2.- param :
----------2.- return :
____________________2D.- grp=>owner
____________________2D.- usr=>owner
____________________2D.- main=>owner
____________________2D.- debug=>owner
____________________2D.- table=>owner
____________________2D.- rec=>owner
____________________2D.- ddd=>owner
____________________2D.- page=>owner
____________________2D.- session=>owner
____________________2D.- nosql=>owner
____________________2D.- jwg=>owner
____________________2D.- basic=>owner
1.- 000000603b1513427ae1.85574258 :
__________1D.- kind=>Out
__________1D.- in=>Allways::Connect
__________1D.- from=>Connect
----------2.- param :
____________________2D.- 0=>admin
____________________2D.- 1=>OT2021Free
__________1D.- return=>1
**********+++++++++++
Delete 1rst log
**********+++++++++++

DbgDltLog('log_system.20210227') **********+++++++++++
start debug with user, disk
**********+++++++++++

DbgForUsr()
Start!!!

DbgStr()
Start!!!

**********+++++++++++
stop debug
**********+++++++++++

DbgStr()
Stop!!!

**********+++++++++++
Show logs
**********+++++++++++

DbgShw('')
0D.- 1=>log_Anonimus.20210227
0D.- 2=>log_admin.20210227
**********+++++++++++
Show 1rst log
**********+++++++++++

DbgShwLog('log_Anonimus.20210227')
1.- 000000603b151342ab25.51172651 :
__________1D.- kind=>Out
__________1D.- in=>Allways::DiscConnect
__________1D.- from=>DiscConnect
----------2.- param :
__________1D.- return=>1
1.- 000000603b151342bb51.90054105 :
__________1D.- kind=>Out
__________1D.- in=>Allways::Connect
__________1D.- from=>Connect
----------2.- param :
____________________2D.- 0=>admix
____________________2D.- 1=>OT2021Free
__________1D.- return=>
**********+++++++++++
delete all log
**********+++++++++++

DbgClrLog()
Empty
**********+++++++++++
start debug with advanced, user, disk
**********+++++++++++

DbgMdeAdv()
Start!!!

DbgStr()
Start!!!

**********+++++++++++
stop debug
**********+++++++++++

DbgStr()
Stop!!!

**********+++++++++++
Show logs
**********+++++++++++

DbgShw('')
0D.- 1=>log_Anonimus.20210227
0D.- 2=>log_admin.20210227
**********+++++++++++
Show 1rst log
**********+++++++++++

DbgShwLog('log_Anonimus.20210227')
1.- 000000603b15134348a9.06280285 :
__________1D.- kind=>Out
__________1D.- in=>Allways::DiscConnect
__________1D.- from=>DiscConnect
----------2.- param :
__________1D.- return=>1
1.- 000000603b1513435096.05221078 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>content.json
1.- 000000603b1513435ad9.74285575 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>content.json
1.- 000000603b1513436787.89228236 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>error.json
1.- 000000603b15134371f2.39008939 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>features.json
1.- 000000603b1513437cd4.70358572 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>container.json
1.- 000000603b15134387d8.89831729 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>level.json
1.- 000000603b1513439306.30776226 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>status.json
1.- 000000603b1513439ef3.58152430 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>users.json
1.- 000000603b151343ac78.34166945 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>features.json
1.- 000000603b151343b688.78375902 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>features.json
1.- 000000603b151343c702.19569256 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>usr
1.- 000000603b151343d547.44948575 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>grp
1.- 000000603b151343e3a4.19433914 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>debug
1.- 000000603b151343f433.53657747 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>basic
1.- 000000603b1513440411.83958772 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>table
1.- 000000603b1513463d34.74879529 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>rec
1.- 000000603b1513465469.16448253 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>ddd
1.- 000000603b1513466165.92138348 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>page
1.- 000000603b1513466b87.12459013 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>session
1.- 000000603b1513467596.89182572 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>nosql
1.- 000000603b1513467f79.53009574 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>jwg
1.- 000000603b1513468986.70242349 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_connect
__________1D.- from=>ot_connect
----------2.- param :
____________________2D.- 0=>
1.- 000000603b151346b488.27503772 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_exist
__________1D.- from=>ot_exist
----------2.- param :
____________________2D.- 0=>admix
____________________2D.- 1=>usr
1.- 000000603b151346bf33.39732716 :
__________1D.- kind=>Out
__________1D.- in=>Allways::Connect
__________1D.- from=>Connect
----------2.- param :
____________________2D.- 0=>admix
____________________2D.- 1=>OT2021Free
__________1D.- return=>
1.- 000000603b151346c997.29754351 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>content.json
1.- 000000603b151346d454.14122896 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>content.json
1.- 000000603b151346e195.58221402 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>error.json
1.- 000000603b151346ec36.93267484 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>features.json
1.- 000000603b151346f747.57826292 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>container.json
1.- 000000603b1513470275.94088308 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>level.json
1.- 000000603b1513470dd2.06700891 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>status.json
1.- 000000603b1513471933.62210458 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>users.json
1.- 000000603b15134724c3.14899736 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>features.json
1.- 000000603b1513473071.32973346 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>features.json
1.- 000000603b1513473ee0.73648650 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>usr
1.- 000000603b1513474b22.59733413 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>grp
1.- 000000603b15134757d9.44047521 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>debug
1.- 000000603b1513476494.88300494 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>basic
1.- 000000603b1513477178.44947232 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>table
1.- 000000603b1513478130.98145450 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>rec
1.- 000000603b1513478f44.39982471 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>ddd
1.- 000000603b1513479c96.19453247 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>page
1.- 000000603b151347a9e8.50839928 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>session
1.- 000000603b151347b755.96060807 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>nosql
1.- 000000603b151347c509.58996423 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>jwg
1.- 000000603b151347d2c7.71769383 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_connect
__________1D.- from=>ot_connect
----------2.- param :
____________________2D.- 0=>
1.- 000000603b151347e510.25505710 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_exist
__________1D.- from=>ot_exist
----------2.- param :
____________________2D.- 0=>admin
____________________2D.- 1=>usr
1.- 000000603b151347f5c7.85404547 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_read
__________1D.- from=>ot_read
----------2.- param :
____________________2D.- 0=>admin.json
____________________2D.- 1=>usr/admin
1.- 000000603b1513480944.53497958 :
__________1D.- kind=>funct
__________1D.- in=>Functions::ot_value
__________1D.- from=>ot_value
----------2.- param :
____________________2D.- 0=>cb5a7304d7f6c9edc5b94030314aacbd
____________________2D.- 1=>cb5a7304d7f6c9edc5b94030314aacbd
____________________2D.- 2=>C0010M012
1.- 000000603b15134818b3.99657440 :
__________1D.- kind=>funct
__________1D.- in=>Functions::ot_value
__________1D.- from=>ot_value
----------2.- param :
____________________2D.- 0=>active
____________________2D.- 1=>active
____________________2D.- 2=>C0010M022
**********+++++++++++
delete all log
**********+++++++++++

DbgClrLog()
Empty
**********+++++++++++
start debug to screen with advanced, user
**********+++++++++++

DbgToScr()
Start!!!

DbgStr()
000000603b1513490eb0.67860573

0D.- kind=>Out
0D.- in=>DebugA::DbgStr
0D.- from=>DbgStr
1.- param :
0D.- return=>1

Start!!!


000000603b1513490f85.87387638

0D.- kind=>func
0D.- in=>Functions::ot_connect
0D.- from=>ot_connect
1.- param :

000000603b1513490ff0.78370273

0D.- kind=>funct
0D.- in=>Cripto::ot_readif
0D.- from=>ot_readif
1.- param :
__________1D.- 0=>online.json
__________1D.- 1=>no

000000603b1513491376.11201227

0D.- kind=>func
0D.- in=>Content::ot_deletein
0D.- from=>ot_deletein
1.- param :
__________1D.- 0=>admin
__________1D.- 1=>online.json

000000603b15134913f5.00932659

0D.- kind=>funct
0D.- in=>Cripto::ot_write
0D.- from=>ot_write
1.- param :
__________1D.- 0=>online.json
----------2.- 1 :
__________1D.- 2=>no

000000603b1513491b58.99021309

0D.- kind=>Out
0D.- in=>Allways::DiscConnect
0D.- from=>DiscConnect
1.- param :
0D.- return=>1

000000603b1513491c56.91834183

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>content.json

000000603b1513491d70.75458652

0D.- kind=>funct
0D.- in=>Cripto::ot_readif
0D.- from=>ot_readif
1.- param :
__________1D.- 0=>content.json

000000603b1513492b07.96073950

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>error.json

000000603b1513492bb6.23758088

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>features.json

000000603b1513492c21.26880302

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>container.json

000000603b1513492c82.60951650

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>level.json

000000603b1513492cf4.04731377

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>status.json

000000603b1513492d53.14901353

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>users.json

000000603b1513492dc6.77450444

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>features.json

000000603b1513492e38.46079402

0D.- kind=>funct
0D.- in=>Cripto::ot_readif
0D.- from=>ot_readif
1.- param :
__________1D.- 0=>features.json

000000603b1513493022.22897239

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>usr

000000603b15134930b3.52410170

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>grp

000000603b1513493117.34494908

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>debug

000000603b1513493181.22336775

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>basic

000000603b15134931e0.27161032

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>table

000000603b1513493251.45086962

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>rec

000000603b15134932b9.01274624

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>ddd

000000603b1513493316.87611401

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>page

000000603b1513493389.67019384

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>session

000000603b15134933e6.45502582

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>nosql

000000603b1513493442.71496551

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>jwg

000000603b15134934c7.51107636

0D.- kind=>func
0D.- in=>Functions::ot_connect
0D.- from=>ot_connect
1.- param :
__________1D.- 0=>

000000603b1513493509.41072868

0D.- kind=>func
0D.- in=>Functions::ot_exist
0D.- from=>ot_exist
1.- param :
__________1D.- 0=>admix
__________1D.- 1=>usr

000000603b1513493593.24841986

0D.- kind=>Out
0D.- in=>Allways::Connect
0D.- from=>Connect
1.- param :
__________1D.- 0=>admix
__________1D.- 1=>OT2021Free
0D.- return=>

000000603b15134935f2.82300234

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>content.json

000000603b1513493665.73001059

0D.- kind=>funct
0D.- in=>Cripto::ot_readif
0D.- from=>ot_readif
1.- param :
__________1D.- 0=>content.json

000000603b1513493803.21828185

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>error.json

000000603b1513493894.36627628

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>features.json

000000603b1513493900.86037615

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>container.json

000000603b1513493968.97370854

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>level.json

000000603b15134939c0.83910885

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>status.json

000000603b1513493a26.55011136

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>users.json

000000603b1513493a82.31889090

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>features.json

000000603b1513493ae6.46108580

0D.- kind=>funct
0D.- in=>Cripto::ot_readif
0D.- from=>ot_readif
1.- param :
__________1D.- 0=>features.json

000000603b1513493c97.97706074

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>usr

000000603b1513493d02.50725485

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>grp

000000603b1513493d70.11695445

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>debug

000000603b1513493dd8.14816810

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>basic

000000603b1513493e33.76440090

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>table

000000603b1513493e91.14223165

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>rec

000000603b1513493ef7.22999535

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>ddd

000000603b1513493f59.40725324

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>page

000000603b1513493fb0.72025782

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>session

000000603b1513494010.67065367

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>nosql

000000603b1513494076.96842863

0D.- kind=>func
0D.- in=>Functions::ot_qexist
0D.- from=>ot_qexist
1.- param :
__________1D.- 0=>jwg

000000603b15134940e8.72417709

0D.- kind=>func
0D.- in=>Functions::ot_connect
0D.- from=>ot_connect
1.- param :
__________1D.- 0=>

000000603b1513494121.02795381

0D.- kind=>func
0D.- in=>Functions::ot_exist
0D.- from=>ot_exist
1.- param :
__________1D.- 0=>admin
__________1D.- 1=>usr

000000603b1513494193.65436026

0D.- kind=>funct
0D.- in=>Cripto::ot_read
0D.- from=>ot_read
1.- param :
__________1D.- 0=>admin.json
__________1D.- 1=>usr/admin

000000603b15134943f1.14299069

0D.- kind=>funct
0D.- in=>Functions::ot_value
0D.- from=>ot_value
1.- param :
__________1D.- 0=>cb5a7304d7f6c9edc5b94030314aacbd
__________1D.- 1=>cb5a7304d7f6c9edc5b94030314aacbd
__________1D.- 2=>C0010M012

000000603b1513494472.40087538

0D.- kind=>funct
0D.- in=>Functions::ot_value
0D.- from=>ot_value
1.- param :
__________1D.- 0=>active
__________1D.- 1=>active
__________1D.- 2=>C0010M022

000000603b1513494686.01190357

0D.- kind=>func
0D.- in=>Content::ot_addchangein
0D.- from=>ot_addchangein
1.- param :
__________1D.- 0=>admin
__________1D.- 1=>2021-02-27 21:59:15
__________1D.- 2=>online.json

000000603b1513495252.37065795

0D.- kind=>funct
0D.- in=>Cripto::ot_readif
0D.- from=>ot_readif
1.- param :
__________1D.- 0=>online.json
__________1D.- 1=>no

000000603b1513495437.49502473

0D.- kind=>funct
0D.- in=>Cripto::ot_write
0D.- from=>ot_write
1.- param :
__________1D.- 0=>online.json
----------2.- 1 :
____________________2D.- admin=>2021-02-27 21:59:15
__________1D.- 2=>no

000000603b1513495c26.02130105

0D.- kind=>funct
0D.- in=>Cripto::ot_readif
0D.- from=>ot_readif
1.- param :
__________1D.- 0=>public.json
__________1D.- 1=>usr/admin

000000603b1513496085.69206461

0D.- kind=>funct
0D.- in=>Cripto::ot_readif
0D.- from=>ot_readif
1.- param :
__________1D.- 0=>private.json
__________1D.- 1=>usr/admin

000000603b15134963a4.83017119

0D.- kind=>funct
0D.- in=>Cripto::ot_readif
0D.- from=>ot_readif
1.- param :
__________1D.- 0=>groups.json
__________1D.- 1=>usr/admin

000000603b15134965b0.33905829

0D.- kind=>funct
0D.- in=>Cripto::ot_readif
0D.- from=>ot_readif
1.- param :
__________1D.- 0=>groups.json
__________1D.- 1=>usr/admin

000000603b1513496741.66523822

0D.- kind=>funct
0D.- in=>Cripto::ot_readif
0D.- from=>ot_readif
1.- param :
__________1D.- 0=>features.json
__________1D.- 1=>grp/Administrators

000000603b15134967e7.58981261

0D.- kind=>funct
0D.- in=>Cripto::ot_readif
0D.- from=>ot_readif
1.- param :
__________1D.- 0=>features.json
__________1D.- 1=>grp/AdminUsers

000000603b1513496852.47398476

0D.- kind=>funct
0D.- in=>Cripto::ot_readif
0D.- from=>ot_readif
1.- param :
__________1D.- 0=>features.json
__________1D.- 1=>grp/AdminGroups

000000603b1513496a72.41467981

0D.- kind=>funct
0D.- in=>Cripto::ot_readif
0D.- from=>ot_readif
1.- param :
__________1D.- 0=>features.json
__________1D.- 1=>grp/Everyone

000000603b1513496b02.94238248

0D.- kind=>funct
0D.- in=>Cripto::ot_readif
0D.- from=>ot_readif
1.- param :
__________1D.- 0=>features.json
__________1D.- 1=>usr/admin

000000603b1513496d16.78305745

0D.- kind=>Out
0D.- in=>Allways::MySafety
0D.- from=>MySafety
1.- param :
1.- return :
__________1D.- grp=>owner
__________1D.- usr=>owner
__________1D.- main=>owner
__________1D.- debug=>owner
__________1D.- table=>owner
__________1D.- rec=>owner
__________1D.- ddd=>owner
__________1D.- page=>owner
__________1D.- session=>owner
__________1D.- nosql=>owner
__________1D.- jwg=>owner
__________1D.- basic=>owner

000000603b1513496dd7.64839870

0D.- kind=>Out
0D.- in=>Allways::Connect
0D.- from=>Connect
1.- param :
__________1D.- 0=>admin
__________1D.- 1=>OT2021Free
0D.- return=>1
**********+++++++++++
stop debug
**********+++++++++++

DbgStr()
000000603b1513496e43.08784824

0D.- kind=>func
0D.- in=>Functions::ot_can
0D.- from=>ot_can
1.- param :
__________1D.- 0=>owner
__________1D.- 1=>debug

Stop!!!

**********+++++++++++
start debug to memory with advanced, user
**********+++++++++++

DbgToMmr()
Start!!!

DbgStr()
Start!!!

**********+++++++++++
show memory
**********+++++++++++

Debughold
1.- 000000603b1513496f09.17729063 :
__________1D.- kind=>Out
__________1D.- in=>DebugA::DbgStr
__________1D.- from=>DbgStr
----------2.- param :
__________1D.- return=>1
1.- 000000603b1513496f44.84446556 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_connect
__________1D.- from=>ot_connect
----------2.- param :
1.- 000000603b1513496f77.90723095 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>online.json
____________________2D.- 1=>no
1.- 000000603b15134970e4.83960346 :
__________1D.- kind=>func
__________1D.- in=>Content::ot_deletein
__________1D.- from=>ot_deletein
----------2.- param :
____________________2D.- 0=>admin
____________________2D.- 1=>online.json
1.- 000000603b1513497113.59540536 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_write
__________1D.- from=>ot_write
----------2.- param :
____________________2D.- 0=>online.json
--------------------3.- 1 :
____________________2D.- 2=>no
1.- 000000603b1513497829.05410753 :
__________1D.- kind=>Out
__________1D.- in=>Allways::DiscConnect
__________1D.- from=>DiscConnect
----------2.- param :
__________1D.- return=>1
1.- 000000603b15134978b4.32850774 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>content.json
1.- 000000603b1513497963.81627209 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>content.json
1.- 000000603b1513497c61.60987448 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>error.json
1.- 000000603b1513497d23.61422097 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>features.json
1.- 000000603b1513497d95.75809054 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>container.json
1.- 000000603b1513497dd8.78287832 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>level.json
1.- 000000603b1513497e10.83958145 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>status.json
1.- 000000603b1513497e56.53582052 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>users.json
1.- 000000603b1513497e97.13049419 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>features.json
1.- 000000603b1513497ed1.29224946 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>features.json
1.- 000000603b1513498093.79941962 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>usr
1.- 000000603b15134980f2.87240967 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>grp
1.- 000000603b1513498135.47997519 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>debug
1.- 000000603b1513498174.85451764 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>basic
1.- 000000603b15134981a3.24753693 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>table
1.- 000000603b15134981e8.56118547 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>rec
1.- 000000603b1513498224.04397817 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>ddd
1.- 000000603b1513498265.09238208 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>page
1.- 000000603b1513498292.81146670 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>session
1.- 000000603b15134982d5.51975119 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>nosql
1.- 000000603b1513498316.99741073 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>jwg
1.- 000000603b1513498360.51180759 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_connect
__________1D.- from=>ot_connect
----------2.- param :
____________________2D.- 0=>
1.- 000000603b1513498388.89341367 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_exist
__________1D.- from=>ot_exist
----------2.- param :
____________________2D.- 0=>admix
____________________2D.- 1=>usr
1.- 000000603b15134983d1.24206992 :
__________1D.- kind=>Out
__________1D.- in=>Allways::Connect
__________1D.- from=>Connect
----------2.- param :
____________________2D.- 0=>admix
____________________2D.- 1=>OT2021Free
__________1D.- return=>
1.- 000000603b1513498409.62103284 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>content.json
1.- 000000603b1513498444.31159191 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>content.json
1.- 000000603b15134985b7.66269743 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>error.json
1.- 000000603b1513498607.04874533 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>features.json
1.- 000000603b1513498647.91207126 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>container.json
1.- 000000603b1513498684.01883368 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>level.json
1.- 000000603b15134986b5.75990082 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>status.json
1.- 000000603b15134986f8.05677805 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>users.json
1.- 000000603b1513498730.85547042 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>features.json
1.- 000000603b1513498779.78962267 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>features.json
1.- 000000603b15134988e8.21715206 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>usr
1.- 000000603b1513498930.90575915 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>grp
1.- 000000603b1513498971.20820431 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>debug
1.- 000000603b15134989a3.97848664 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>basic
1.- 000000603b15134989e3.75374690 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>table
1.- 000000603b1513498a20.18036488 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>rec
1.- 000000603b1513498a65.73589597 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>ddd
1.- 000000603b1513498a99.47808474 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>page
1.- 000000603b1513498ad0.51951685 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>session
1.- 000000603b1513498b13.65171943 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>nosql
1.- 000000603b1513498b59.08197840 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_qexist
__________1D.- from=>ot_qexist
----------2.- param :
____________________2D.- 0=>jwg
1.- 000000603b1513498b95.00316837 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_connect
__________1D.- from=>ot_connect
----------2.- param :
____________________2D.- 0=>
1.- 000000603b1513498bb5.28161068 :
__________1D.- kind=>func
__________1D.- in=>Functions::ot_exist
__________1D.- from=>ot_exist
----------2.- param :
____________________2D.- 0=>admin
____________________2D.- 1=>usr
1.- 000000603b1513498c00.36604435 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_read
__________1D.- from=>ot_read
----------2.- param :
____________________2D.- 0=>admin.json
____________________2D.- 1=>usr/admin
1.- 000000603b1513498d92.44273813 :
__________1D.- kind=>funct
__________1D.- in=>Functions::ot_value
__________1D.- from=>ot_value
----------2.- param :
____________________2D.- 0=>cb5a7304d7f6c9edc5b94030314aacbd
____________________2D.- 1=>cb5a7304d7f6c9edc5b94030314aacbd
____________________2D.- 2=>C0010M012
1.- 000000603b1513498dc0.98804207 :
__________1D.- kind=>funct
__________1D.- in=>Functions::ot_value
__________1D.- from=>ot_value
----------2.- param :
____________________2D.- 0=>active
____________________2D.- 1=>active
____________________2D.- 2=>C0010M022
1.- 000000603b1513498f57.58235476 :
__________1D.- kind=>func
__________1D.- in=>Content::ot_addchangein
__________1D.- from=>ot_addchangein
----------2.- param :
____________________2D.- 0=>admin
____________________2D.- 1=>2021-02-27 21:59:15
____________________2D.- 2=>online.json
1.- 000000603b1513498f70.98260282 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>online.json
____________________2D.- 1=>no
1.- 000000603b15134991d8.17223120 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_write
__________1D.- from=>ot_write
----------2.- param :
____________________2D.- 0=>online.json
--------------------3.- 1 :
______________________________3D.- admin=>2021-02-27 21:59:15
____________________2D.- 2=>no
1.- 000000603b1513499a31.76380995 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>public.json
____________________2D.- 1=>usr/admin
1.- 000000603b1513499df1.13153872 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>private.json
____________________2D.- 1=>usr/admin
1.- 000000603b1513499ff5.26762968 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>groups.json
____________________2D.- 1=>usr/admin
1.- 000000603b151349a191.81741136 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>groups.json
____________________2D.- 1=>usr/admin
1.- 000000603b151349a325.75586449 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>features.json
____________________2D.- 1=>grp/Administrators
1.- 000000603b151349a397.32769153 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>features.json
____________________2D.- 1=>grp/AdminUsers
1.- 000000603b151349a404.12393855 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>features.json
____________________2D.- 1=>grp/AdminGroups
1.- 000000603b151349a593.61912432 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>features.json
____________________2D.- 1=>grp/Everyone
1.- 000000603b151349a5f5.52310997 :
__________1D.- kind=>funct
__________1D.- in=>Cripto::ot_readif
__________1D.- from=>ot_readif
----------2.- param :
____________________2D.- 0=>features.json
____________________2D.- 1=>usr/admin
1.- 000000603b151349a7d9.01237033 :
__________1D.- kind=>Out
__________1D.- in=>Allways::MySafety
__________1D.- from=>MySafety
----------2.- param :
----------2.- return :
____________________2D.- grp=>owner
____________________2D.- usr=>owner
____________________2D.- main=>owner
____________________2D.- debug=>owner
____________________2D.- table=>owner
____________________2D.- rec=>owner
____________________2D.- ddd=>owner
____________________2D.- page=>owner
____________________2D.- session=>owner
____________________2D.- nosql=>owner
____________________2D.- jwg=>owner
____________________2D.- basic=>owner
1.- 000000603b151349a806.34468398 :
__________1D.- kind=>Out
__________1D.- in=>Allways::Connect
__________1D.- from=>Connect
----------2.- param :
____________________2D.- 0=>admin
____________________2D.- 1=>OT2021Free
__________1D.- return=>1
**********+++++++++++
stop debug
**********+++++++++++

DbgStr()
Stop!!!

**********+++++++++++
start debug of errors
**********+++++++++++

DbgErrOn()
Start!!!

**********+++++++++++
stop debug error
**********+++++++++++

DbgErrOff()
Stop!!!

**********+++++++++++
Show logs
**********+++++++++++

DbgShw('')
0D.- 1=>log_errorAnonimus.20210227
**********+++++++++++
Show 1rst log
**********+++++++++++

DbgShwLog('log_errorAnonimus.20210227')
1.- 000000603b151349eb61.93749667 :
__________1D.- kind=>Error
__________1D.- Code=>Anonimus
__________1D.- in=>Allways::Connect
__________1D.- from=>Connect
----------2.- param :
____________________2D.- 0=>admix
____________________2D.- 1=>OT2021Free
__________1D.- return=>
**********+++++++++++
delete all log
**********+++++++++++

DbgClrLog()
Empty
**********+++++++++++
Demo Finish
**********+++++++++++

