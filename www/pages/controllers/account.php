<?php
require_once($real_root.'/includes/class.customer_account.php');

require_once($real_root.'/includes/class.order.php');
$order = new Order;

$db = $dbCustom->getDbConnect(CART_DATABASE);


$cust_id = $lgn->getCustId();
$cust_name = $lgn->getFullName($dbCustom,$cust_id);






//echo "cust_id: ".$cust_id;
//echo "<br />";
//echo "cust_name: ".$cust_name;
		


$svg_my_designs = '
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="142.667" height="97.477" viewBox="0 0 142.667 97.477">
<defs>
<linearGradient id="linear-gradient" x1="1.099" y1="-1.364" x2="0.464" y2="0.808" gradientUnits="objectBoundingBox">
<stop offset="0.035" stop-color="#6b24d6"/>
<stop offset="0.294" stop-color="#7733dc"/>
<stop offset="0.794" stop-color="#965bec"/>
<stop offset="1" stop-color="#a56ef4"/>
</linearGradient>
<linearGradient id="linear-gradient-2" x1="-1.372" y1="1.523" x2="6.546" y2="-1.952" xlink:href="#linear-gradient"/>
<linearGradient id="linear-gradient-3" x1="0.593" y1="0.63" x2="1.04" y2="2.094" xlink:href="#linear-gradient"/>
<linearGradient id="linear-gradient-4" x1="0.628" y1="0.454" x2="7.654" y2="-1.536" xlink:href="#linear-gradient"/>
<linearGradient id="linear-gradient-5" x1="0.537" y1="0.613" x2="0.718" y2="1.183" xlink:href="#linear-gradient"/>
<linearGradient id="linear-gradient-6" x1="0.551" y1="0.887" x2="0.821" y2="2.708" xlink:href="#linear-gradient"/>
<linearGradient id="linear-gradient-7" x1="-0.994" y1="1.062" x2="2.061" y2="-0.065" xlink:href="#linear-gradient"/>
<linearGradient id="linear-gradient-8" x1="0.038" y1="0.5" x2="1.004" y2="0.5" gradientUnits="objectBoundingBox">
<stop offset="0" stop-color="#6b24d6"/>
<stop offset="0.067" stop-color="#712cd9"/>
<stop offset="0.162" stop-color="#7734dc"/>
<stop offset="0.323" stop-color="#8c4ee7"/>
<stop offset="0.485" stop-color="#a56ef4"/>
<stop offset="0.874" stop-color="#6b24d6"/>
</linearGradient>
<linearGradient id="linear-gradient-9" x1="0.506" y1="0.511" x2="0.561" y2="0.606" xlink:href="#linear-gradient"/>
<linearGradient id="linear-gradient-10" x1="0.538" y1="0.625" x2="0.725" y2="1.248" xlink:href="#linear-gradient"/>
<linearGradient id="linear-gradient-11" x1="-1.009" y1="6.575" x2="2.069" y2="-5.965" xlink:href="#linear-gradient"/>
<linearGradient id="linear-gradient-12" x1="-0.908" y1="1.422" x2="1.971" y2="-0.463" xlink:href="#linear-gradient"/>
<linearGradient id="linear-gradient-13" x1="-1.058" y1="4.042" x2="2.136" y2="-3.3" xlink:href="#linear-gradient"/>
<linearGradient id="linear-gradient-14" x1="-0.916" y1="1.494" x2="1.979" y2="-0.539" xlink:href="#linear-gradient"/>
<linearGradient id="linear-gradient-15" x1="-1.011" y1="7.189" x2="2.078" y2="-6.573" xlink:href="#linear-gradient"/>
<linearGradient id="linear-gradient-16" x1="-1.203" y1="1.204" x2="2.289" y2="-0.218" xlink:href="#linear-gradient"/>
<linearGradient id="linear-gradient-17" x1="-6.265" y1="0.577" x2="8.543" y2="0.421" xlink:href="#linear-gradient"/>
<linearGradient id="linear-gradient-18" x1="0.06" y1="0.5" x2="0.967" y2="0.5" gradientUnits="objectBoundingBox">
<stop offset="0" stop-color="#7c3adf"/>
<stop offset="0.042" stop-color="#7633dc"/>
<stop offset="0.144" stop-color="#6d27d7"/>
<stop offset="0.253" stop-color="#6b24d6"/>
<stop offset="0.556" stop-color="#9a60ee"/>
<stop offset="0.975" stop-color="#7734dc"/>
</linearGradient>
<radialGradient id="radial-gradient" cx="0.747" cy="0.535" r="0.504" gradientTransform="translate(0.008) scale(0.985 1)" gradientUnits="objectBoundingBox">
<stop offset="0" stop-color="#fff"/>
<stop offset="0.066" stop-color="#d8d8d8"/>
<stop offset="0.162" stop-color="#a5a5a5"/>
<stop offset="0.262" stop-color="#797979"/>
<stop offset="0.366" stop-color="#545454"/>
<stop offset="0.473" stop-color="#353535"/>
<stop offset="0.585" stop-color="#1d1d1d"/>
<stop offset="0.704" stop-color="#0d0d0d"/>
<stop offset="0.835" stop-color="#030303"/>
<stop offset="1"/>
</radialGradient>
<radialGradient id="radial-gradient-2" cx="0.818" cy="0.762" r="1.086" gradientTransform="translate(0.376) scale(0.248 1)" xlink:href="#radial-gradient"/>
<radialGradient id="radial-gradient-3" cx="0.5" cy="0.5" r="1.08" gradientTransform="translate(0.327) scale(0.346 1)" xlink:href="#radial-gradient"/>
<radialGradient id="radial-gradient-4" cx="0.5" cy="0.5" r="1.151" gradientTransform="translate(0.339) scale(0.323 1)" xlink:href="#radial-gradient"/>
<radialGradient id="radial-gradient-5" cx="0.5" cy="0.5" r="0.5" gradientTransform="matrix(-0.046, 1, -0.999, -0.003, 906.623, 1342.188)" gradientUnits="objectBoundingBox">
<stop offset="0" stop-color="#4916a1"/>
<stop offset="0.07" stop-color="#3e128a"/>
<stop offset="0.218" stop-color="#2b0d60"/>
<stop offset="0.37" stop-color="#1b083d"/>
<stop offset="0.522" stop-color="#0f0422"/>
<stop offset="0.677" stop-color="#06020f"/>
<stop offset="0.834" stop-color="#010003"/>
<stop offset="1"/>
</radialGradient>
<radialGradient id="radial-gradient-6" cx="0.5" cy="0.5" r="0.5" gradientTransform="matrix(-0.046, 1, -0.999, -0.003, 927.011, 1347.412)" xlink:href="#radial-gradient-5"/>
<linearGradient id="linear-gradient-19" x1="1.154" y1="-1.615" x2="0.44" y2="0.691" gradientUnits="objectBoundingBox">
<stop offset="0.035" stop-color="#138bbd"/>
<stop offset="0.226" stop-color="#169ac6"/>
<stop offset="0.595" stop-color="#1ec2df"/>
<stop offset="1" stop-color="#2af6ff"/>
</linearGradient>
<linearGradient id="linear-gradient-20" x1="0.319" y1="0.672" x2="2.384" y2="0.15" xlink:href="#linear-gradient-19"/>
<linearGradient id="linear-gradient-21" x1="1.746" y1="0.647" x2="6.396" y2="1.087" xlink:href="#linear-gradient-19"/>
<linearGradient id="linear-gradient-22" x1="0.004" y1="0.5" x2="1.007" y2="0.5" gradientUnits="objectBoundingBox">
<stop offset="0" stop-color="#1bb0d4"/>
<stop offset="0.107" stop-color="#1ebfdd"/>
<stop offset="0.237" stop-color="#23d8ec"/>
<stop offset="0.367" stop-color="#1ebfdd"/>
<stop offset="0.439" stop-color="#1bb0d4"/>
<stop offset="0.495" stop-color="#1bb0d4"/>
<stop offset="0.505" stop-color="#1bb0d4"/>
<stop offset="0.545" stop-color="#20c6e2"/>
<stop offset="0.563" stop-color="#1aafd3"/>
<stop offset="0.584" stop-color="#169bc7"/>
<stop offset="0.605" stop-color="#138fbf"/>
<stop offset="0.626" stop-color="#138bbd"/>
</linearGradient>
<linearGradient id="linear-gradient-23" x1="-0.93" y1="0.848" x2="1.993" y2="0.137" xlink:href="#linear-gradient-19"/>
<linearGradient id="linear-gradient-24" x1="-445.159" y1="-259.906" x2="4348.81" y2="2538.483" xlink:href="#linear-gradient-19"/>
<linearGradient id="linear-gradient-25" x1="1291.304" y1="753.722" x2="3237.907" y2="1890.015" xlink:href="#linear-gradient-19"/>
<linearGradient id="linear-gradient-26" x1="0.207" y1="0.192" x2="1.443" y2="1.491" xlink:href="#linear-gradient-19"/>
<linearGradient id="linear-gradient-27" x1="0.655" y1="0.663" x2="1.157" y2="1.19" xlink:href="#linear-gradient-19"/>
<radialGradient id="radial-gradient-7" cx="0.361" cy="0.419" r="1.191" gradientTransform="translate(0.277) scale(0.446 1)" xlink:href="#radial-gradient"/>
<radialGradient id="radial-gradient-8" cx="0.5" cy="0.5" r="0.672" gradientTransform="translate(0.191) scale(0.618 1)" xlink:href="#radial-gradient"/>
<radialGradient id="radial-gradient-9" cx="0.301" cy="0.229" r="1.387" gradientTransform="translate(0.368) scale(0.264 1)" xlink:href="#radial-gradient"/>
<radialGradient id="radial-gradient-10" cx="0.5" cy="0.5" r="0.5" gradientTransform="matrix(-0.057, 1, -0.998, -0.002, 1048.764, 1515.815)" gradientUnits="objectBoundingBox">
<stop offset="0" stop-color="#972a74"/>
<stop offset="0.041" stop-color="#8a266a"/>
<stop offset="0.194" stop-color="#601a49"/>
<stop offset="0.35" stop-color="#3d112f"/>
<stop offset="0.507" stop-color="#22091a"/>
<stop offset="0.667" stop-color="#0f040b"/>
<stop offset="0.829" stop-color="#030102"/>
<stop offset="1"/>
</radialGradient>
<radialGradient id="radial-gradient-11" cx="0.5" cy="0.5" r="0.25" gradientTransform="matrix(2.001, 0, 0, 2.001, 43.099, -59.227)" xlink:href="#radial-gradient-10"/>
<linearGradient id="linear-gradient-30" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
<stop offset="0.035" stop-color="#9f19ab"/>
<stop offset="0.244" stop-color="#ae24b0"/>
<stop offset="0.645" stop-color="#d643bf"/>
<stop offset="1" stop-color="#ff63ce"/>
</linearGradient>
<linearGradient id="linear-gradient-31" x1="1.097" y1="-1.425" x2="0.383" y2="0.881" xlink:href="#linear-gradient-30"/>
<linearGradient id="linear-gradient-32" x1="1.647" y1="0.5" x2="-0.343" y2="0.5" gradientUnits="objectBoundingBox">
<stop offset="0" stop-color="#9f19ab"/>
<stop offset="0.136" stop-color="#ae24b0"/>
<stop offset="0.399" stop-color="#d643bf"/>
<stop offset="0.631" stop-color="#ff63ce"/>
<stop offset="0.874" stop-color="#dc48c1"/>
</linearGradient>
<linearGradient id="linear-gradient-33" x1="0.374" y1="0.218" x2="0.751" y2="1.061" xlink:href="#linear-gradient-30"/>
<linearGradient id="linear-gradient-34" x1="0.167" y1="0.608" x2="2.417" y2="-0.12" xlink:href="#linear-gradient-30"/>
<linearGradient id="linear-gradient-35" x1="-1.154" y1="0.792" x2="2.114" y2="0.081" xlink:href="#linear-gradient-30"/>
<linearGradient id="linear-gradient-36" x1="-0.321" y1="0.644" x2="1.509" y2="0.326" xlink:href="#linear-gradient-30"/>
<linearGradient id="linear-gradient-37" x1="0.622" y1="0.639" x2="1.414" y2="2.328" xlink:href="#linear-gradient-30"/>
<linearGradient id="linear-gradient-38" x1="1.124" y1="0.5" x2="-0.03" y2="0.5" gradientUnits="objectBoundingBox">
<stop offset="0" stop-color="#9f19ab"/>
<stop offset="0.166" stop-color="#ae24b0"/>
<stop offset="0.486" stop-color="#d643bf"/>
<stop offset="0.768" stop-color="#ff63ce"/>
<stop offset="0.924" stop-color="#dc48c1"/>
</linearGradient>
<radialGradient id="radial-gradient-12" cx="0.693" cy="0.48" r="0.931" gradientTransform="translate(0.199) scale(0.602 1)" xlink:href="#radial-gradient"/>
<radialGradient id="radial-gradient-13" cx="0.785" cy="0.176" r="1.034" gradientTransform="translate(0.181) scale(0.637 1)" xlink:href="#radial-gradient"/>
<radialGradient id="radial-gradient-14" cx="0.5" cy="0.5" r="0.5" gradientTransform="matrix(-0.05, 1, -0.999, -0.003, 864.634, 1064.53)" gradientUnits="objectBoundingBox">
<stop offset="0" stop-color="#ad3185"/>
<stop offset="0.102" stop-color="#8a276a"/>
<stop offset="0.245" stop-color="#601b4a"/>
<stop offset="0.391" stop-color="#3d112f"/>
<stop offset="0.538" stop-color="#22091a"/>
<stop offset="0.688" stop-color="#0f040b"/>
<stop offset="0.84" stop-color="#030102"/>
<stop offset="1"/>
</radialGradient>
<radialGradient id="radial-gradient-15" cx="0.175" cy="0.936" r="2.019" gradientTransform="translate(0.358) scale(0.284 1)" xlink:href="#radial-gradient"/>
<radialGradient id="radial-gradient-16" cx="0.657" cy="0.556" r="0.892" gradientTransform="translate(0.192) scale(0.616 1)" xlink:href="#radial-gradient"/>
<linearGradient id="linear-gradient-39" x1="0.993" y1="-1.335" x2="0.381" y2="0.726" gradientUnits="objectBoundingBox">
<stop offset="0.035" stop-color="#ffa98c"/>
<stop offset="0.317" stop-color="#feb892"/>
<stop offset="0.86" stop-color="#fee0a3"/>
<stop offset="1" stop-color="#feeca8"/>
</linearGradient>
<linearGradient id="linear-gradient-40" x1="0.001" y1="0.5" x2="1.001" y2="0.5" gradientUnits="objectBoundingBox">
<stop offset="0.066" stop-color="#fcce9e"/>
<stop offset="0.52" stop-color="#fac099"/>
<stop offset="0.585" stop-color="#fee0a5"/>
<stop offset="0.591" stop-color="#ffe4a7"/>
<stop offset="0.609" stop-color="#fcd4a0"/>
<stop offset="0.643" stop-color="#f9bd97"/>
<stop offset="0.675" stop-color="#f7ae91"/>
<stop offset="0.702" stop-color="#f7aa90"/>
<stop offset="1" stop-color="#f9b695"/>
</linearGradient>
<linearGradient id="linear-gradient-41" x1="-1.279" y1="0.736" x2="2.255" y2="0.111" xlink:href="#linear-gradient-39"/>
<linearGradient id="linear-gradient-42" x1="1.026" y1="0.5" x2="-2.231" y2="0.5" gradientUnits="objectBoundingBox">
<stop offset="0.035" stop-color="#f7aa90"/>
<stop offset="0.232" stop-color="#f9b996"/>
<stop offset="0.61" stop-color="#fee1a6"/>
<stop offset="0.631" stop-color="#ffe4a7"/>
<stop offset="0.874" stop-color="#f7aa90"/>
</linearGradient>
<radialGradient id="radial-gradient-17" cx="0.507" cy="0.499" r="0.359" gradientTransform="translate(-2.509) scale(6.019 1)" xlink:href="#radial-gradient"/>
<radialGradient id="radial-gradient-18" cx="0.5" cy="0.5" r="0.578" gradientTransform="translate(0.113) scale(0.774 1)" xlink:href="#radial-gradient"/>
<radialGradient id="radial-gradient-19" cx="0.429" cy="0.593" r="0.776" gradientTransform="translate(0.244) scale(0.512 1)" xlink:href="#radial-gradient"/>
<radialGradient id="radial-gradient-20" cx="0.346" cy="0.541" r="1.106" gradientTransform="translate(0.331) scale(0.337 1)" xlink:href="#radial-gradient"/>
<radialGradient id="radial-gradient-21" cx="0.5" cy="0.5" r="0.5" gradientTransform="matrix(-0.08, 1, -0.997, -0.002, 1160.375, 1072.092)" xlink:href="#radial-gradient-10"/>
<radialGradient id="radial-gradient-22" cx="0.5" cy="0.5" r="0.5" gradientTransform="matrix(-0.057, 1, -0.998, -0.002, 1291.159, 1867.713)" xlink:href="#radial-gradient-10"/>
<radialGradient id="radial-gradient-23" cx="0.5" cy="0.5" r="0.402" gradientTransform="matrix(1.101, -0.38, 0.579, 1.184, 35.466, -1.973)" xlink:href="#radial-gradient-10"/>
</defs>
<g id="Group_429" data-name="Group 429" transform="translate(-280.054 -107.978)">
<g id="Group_418" data-name="Group 418" transform="translate(315.706 107.978)">
<path id="Path_265" data-name="Path 265" d="M377.622,131.412c2.109-2.068,6.845-2.686,10.344-1.287,2.813,1.124,3.894,3.563,2.36,5.317a7.234,7.234,0,0,1-3.976,2.034c-.784.163-.872.783-.153,1.03l14.192,4.859,8.422-8.257a1.744,1.744,0,0,1,2.282.137,5.689,5.689,0,0,0,3.409,2.31c3.171.955,7.136.338,9.028-1.4,2.077-1.91.992-4.429-2.363-5.577a11.358,11.358,0,0,0-4.8-.5c-1.06.113-1.861-.555-1.314-1.091l8.423-8.257L387.015,108.25a4.9,4.9,0,0,0-4.579.672l-21.393,20.972,14.211,4.866c.71.243,1.6-.1,1.469-.565A2.755,2.755,0,0,1,377.622,131.412Z" transform="translate(-361.043 -107.978)" fill="url(#linear-gradient)"/>
<path id="Path_266" data-name="Path 266" d="M484.82,146.3a11.357,11.357,0,0,1,4.8.5,7.565,7.565,0,0,1,1.6.754l.707-.693v-9.9l-8.423,8.257C482.959,145.746,483.759,146.414,484.82,146.3Z" transform="translate(-429.497 -124.198)" fill="url(#linear-gradient-2)"/>
<path id="Path_267" data-name="Path 267" d="M424.532,161.7a3.1,3.1,0,0,1-1,1.657c-1.892,1.74-5.857,2.356-9.028,1.4a5.689,5.689,0,0,1-3.409-2.31,1.744,1.744,0,0,0-2.282-.137l-8.422,8.257L386.2,165.71c-.72-.247-.631-.867.153-1.03a7.234,7.234,0,0,0,3.976-2.034c1.535-1.753.453-4.193-2.36-5.317-3.5-1.4-8.234-.781-10.344,1.287a2.755,2.755,0,0,0-.9,2.783c.133.469-.759.808-1.469.565L361.043,157.1V167l14.211,4.866c.71.243,1.6-.1,1.469-.565a2.755,2.755,0,0,1,.9-2.783c1.686-1.653,5.048-2.376,8.117-1.887v8.354c-.091.228.049.487.457.626l14.192,4.859,8.422-8.257a1.744,1.744,0,0,1,2.282.137,5.689,5.689,0,0,0,3.409,2.31c3.171.955,7.136.338,9.028-1.4a2.721,2.721,0,0,0,1-2.578Z" transform="translate(-361.043 -135.183)" fill="url(#linear-gradient-3)"/>
<path id="Path_268" data-name="Path 268" d="M460.111,178.716v-9.9a1.683,1.683,0,0,0-1.269.346l-8.423,8.257v9.9l8.423-8.257A1.683,1.683,0,0,1,460.111,178.716Z" transform="translate(-411.075 -142.028)" fill="url(#linear-gradient-4)"/>
<g id="Group_414" data-name="Group 414" transform="translate(0 21.393)">
<path id="Path_269" data-name="Path 269" d="M470.172,191.662c-.018.008-.039.013-.056.022C470.133,191.675,470.154,191.67,470.172,191.662Z" transform="translate(-422.102 -176.217)" fill="url(#linear-gradient-5)"/>
<path id="Path_270" data-name="Path 270" d="M470.853,191.435l-.029.005Z" transform="translate(-422.498 -176.09)" fill="url(#linear-gradient-6)"/>
<path id="Path_271" data-name="Path 271" d="M386.2,165.71c-.72-.247-.631-.867.153-1.03a7.232,7.232,0,0,0,3.976-2.034c1.535-1.753.453-4.192-2.36-5.317-3.5-1.4-8.234-.781-10.344,1.287a2.756,2.756,0,0,0-.9,2.783c.133.47-.758.808-1.468.565l-14.21-4.866V167l14.21,4.866c.71.243,1.6-.1,1.468-.565a2.756,2.756,0,0,1,.9-2.783c1.686-1.653,5.048-2.376,8.117-1.887v8.354c-.09.228.049.487.457.626l14.192,4.859v-9.9Z" transform="translate(-361.044 -156.576)" fill="url(#linear-gradient-7)"/>
<path id="Path_272" data-name="Path 272" d="M486.024,177.2V168.22a3.1,3.1,0,0,1-1,1.657c-1.892,1.74-5.857,2.356-9.028,1.4a5.686,5.686,0,0,1-3.409-2.31,1.644,1.644,0,0,0-1.693-.434,2.191,2.191,0,0,1,.68-.05v9.9a1.275,1.275,0,0,1,1.013.484,5.686,5.686,0,0,0,3.409,2.31c3.171.955,7.136.338,9.028-1.4A2.721,2.721,0,0,0,486.024,177.2Z" transform="translate(-422.535 -163.094)" fill="url(#linear-gradient-8)"/>
<path id="Path_273" data-name="Path 273" d="M469.8,169.212a1.033,1.033,0,0,0-.248.174A1.012,1.012,0,0,1,469.8,169.212Z" transform="translate(-421.786 -163.649)" fill="url(#linear-gradient-9)"/>
<path id="Path_274" data-name="Path 274" d="M470.5,168.947a1.542,1.542,0,0,0-.255.095A1.542,1.542,0,0,1,470.5,168.947Z" transform="translate(-422.173 -163.501)" fill="url(#linear-gradient-10)"/>
</g>
<g id="Group_416" data-name="Group 416" transform="translate(0 21.393)">
<path id="Path_275" data-name="Path 275" d="M393.957,168.964c.016,0,.032,0,.048,0C393.989,168.965,393.973,168.966,393.957,168.964Z" transform="translate(-379.468 -163.511)" fill="url(#linear-gradient-11)"/>
<path id="Path_276" data-name="Path 276" d="M374.222,162.275l-13.179-4.512h0Z" transform="translate(-361.044 -157.24)" fill="url(#linear-gradient-12)"/>
<path id="Path_277" data-name="Path 277" d="M394.619,168.991l-.018,0Z" transform="translate(-379.829 -163.526)" fill="url(#linear-gradient-13)"/>
<path id="Path_278" data-name="Path 278" d="M392.013,190.867l-1.032-.353,1.032.353a1.517,1.517,0,0,0,.278.065A1.517,1.517,0,0,1,392.013,190.867Z" transform="translate(-377.802 -175.574)" fill="url(#linear-gradient-14)"/>
<path id="Path_279" data-name="Path 279" d="M394.066,191.47a1.7,1.7,0,0,0,.236.011A1.63,1.63,0,0,1,394.066,191.47Z" transform="translate(-379.529 -176.109)" fill="url(#linear-gradient-15)"/>
<g id="Group_415" data-name="Group 415" transform="translate(15.267)">
<path id="Path_280" data-name="Path 280" d="M395.744,191.249v0C395.723,191.257,395.716,191.261,395.744,191.249Z" transform="translate(-395.725 -175.984)" fill="url(#linear-gradient-16)"/>
<path id="Path_281" data-name="Path 281" d="M417.094,198.559a.346.346,0,0,0,0,.129Z" transform="translate(-407.684 -180.078)" fill="url(#linear-gradient-17)"/>
<path id="Path_282" data-name="Path 282" d="M405.159,165.312c-.075-.254.142-.53.628-.632a7.232,7.232,0,0,0,3.976-2.034c1.535-1.753.453-4.192-2.359-5.317-3.5-1.4-8.234-.781-10.344,1.287a2.756,2.756,0,0,0-.9,2.783c.065.228-.114.422-.393.537v9.9c.085-.044.471-.258.393-.534a2.756,2.756,0,0,1,.9-2.783c1.683-1.649,5.035-2.372,8.1-1.889Z" transform="translate(-395.749 -156.576)" fill="url(#linear-gradient-18)"/>
</g>
</g>
<g id="Group_417" data-name="Group 417" transform="translate(0 12.804)" style="mix-blend-mode: color-dodge;isolation: isolate">
<path id="Path_283" data-name="Path 283" d="M483.47,145.534c.012-.014.022-.028.036-.042l8.423-8.257-.5-.171-7.924,7.767A.47.47,0,0,0,483.47,145.534Z" transform="translate(-429.498 -137.065)" fill="url(#radial-gradient)"/>
<path id="Path_284" data-name="Path 284" d="M454.89,168.716c-1.892,1.74-5.857,2.356-9.028,1.4a5.686,5.686,0,0,1-3.409-2.31,1.744,1.744,0,0,0-2.282-.137l-8.422,8.257-14.192-4.859a.943.943,0,0,1-.306-.171c-.317.254-.231.647.306.831l14.192,4.859,8.422-8.257a1.744,1.744,0,0,1,2.282.137,5.686,5.686,0,0,0,3.409,2.31c3.171.955,7.136.338,9.028-1.4a2.76,2.76,0,0,0,1.026-2.444A3.029,3.029,0,0,1,454.89,168.716Z" transform="translate(-392.405 -153.785)" fill="url(#radial-gradient-2)"/>
<path id="Path_285" data-name="Path 285" d="M376.651,161.6a1.389,1.389,0,0,1-1.4.247l-13.712-4.694-.5.489,14.21,4.866c.71.243,1.6-.1,1.468-.565A2.511,2.511,0,0,1,376.651,161.6Z" transform="translate(-361.044 -148.31)" fill="url(#radial-gradient-3)"/>
<path id="Path_286" data-name="Path 286" d="M410.817,160.221c.2-1.475-.931-3.051-3.034-3.892-3.5-1.4-8.234-.781-10.344,1.287a2.836,2.836,0,0,0-.97,2.445,3.089,3.089,0,0,1,.97-1.785c2.11-2.068,6.845-2.686,10.344-1.287A4.422,4.422,0,0,1,410.817,160.221Z" transform="translate(-380.861 -147.427)" fill="url(#radial-gradient-4)"/>
</g>
<path id="Path_287" data-name="Path 287" d="M486.362,177.437c-.85-.01-1.507-2.832-1.467-6.3s.76-6.279,1.609-6.27,1.507,2.833,1.467,6.305S487.212,177.446,486.362,177.437Z" transform="translate(-430.373 -139.821)" fill="url(#radial-gradient-5)" style="mix-blend-mode: color-dodge;isolation: isolate"/>
<path id="Path_288" data-name="Path 288" d="M411.112,155.437c-.85-.01-1.507-2.832-1.467-6.3s.76-6.279,1.609-6.27,1.507,2.833,1.467,6.305S411.962,155.446,411.112,155.437Z" transform="translate(-388.249 -127.506)" fill="url(#radial-gradient-6)" style="mix-blend-mode: color-dodge;isolation: isolate"/>
</g>
<g id="Group_422" data-name="Group 422" transform="translate(280.054 133.221)">
<path id="Path_289" data-name="Path 289" d="M317.6,193.685c-2.957-1.707-2.843-4.513.353-6.112a12.077,12.077,0,0,1,9.493.037,4.1,4.1,0,0,1,2.447,2.742c.083.48,1.1.688,1.69.348l11.6-6.7-11.8-6.815c-.764-.441-.29-1.2.784-1.241a9.466,9.466,0,0,0,4.7-1.317c2.372-1.53,2.3-3.9-.158-5.406a10.779,10.779,0,0,0-9.931-.1,3.566,3.566,0,0,0-2,2.557c-.067.622-1.383.9-2.149.457l-11.805-6.816-29.8,17.2c-1.3.752-1.3,1.975.015,2.732l29.984,17.312,11.614-6.705c.58-.335.229-.921-.591-.965A10.154,10.154,0,0,1,317.6,193.685Z" transform="translate(-280.054 -165.322)" fill="url(#linear-gradient-19)"/>
<path id="Path_290" data-name="Path 290" d="M401.652,183.61a9.466,9.466,0,0,1-4.7,1.317c-1.074.038-1.548.8-.784,1.241l7.182,4.146v-8.951A3.469,3.469,0,0,1,401.652,183.61Z" transform="translate(-344.841 -174.302)" fill="url(#linear-gradient-20)"/>
<path id="Path_291" data-name="Path 291" d="M280.06,207.418h0v0Z" transform="translate(-280.058 -188.887)" fill="url(#linear-gradient-21)"/>
<g id="Group_419" data-name="Group 419" transform="translate(0 18.593)">
<path id="Path_292" data-name="Path 292" d="M376.612,214.456c-.588.34-1.607.132-1.69-.348a4.1,4.1,0,0,0-2.447-2.743,12.077,12.077,0,0,0-9.493-.037c-3.2,1.6-3.311,4.4-.354,6.112a10.157,10.157,0,0,0,4.45,1.213c.5.028.827.259.87.511h0v.008a.237.237,0,0,1,0,.026v1.089a10.777,10.777,0,0,1,4.524.984,4.1,4.1,0,0,1,2.447,2.742c.082.48,1.1.688,1.69.348l11.109-6.414.49-.1V207.76Z" transform="translate(-325.085 -207.672)" fill="url(#linear-gradient-22)"/>
<path id="Path_293" data-name="Path 293" d="M281.042,208.9a1.69,1.69,0,0,1-.985-1.342v9.7l.013-.006a1.577,1.577,0,0,0,.972,1.557l29.984,17.312v-9.9Z" transform="translate(-280.055 -207.559)" fill="url(#linear-gradient-23)"/>
<path id="Path_294" data-name="Path 294" d="M377.431,233.668h0s0,.005,0,.007Z" transform="translate(-334.563 -222.175)" fill="url(#linear-gradient-24)"/>
<path id="Path_295" data-name="Path 295" d="M377.431,233.668h0s0,.005,0,.007Z" transform="translate(-334.563 -222.175)" fill="url(#linear-gradient-25)"/>
<path id="Path_296" data-name="Path 296" d="M362.025,234.165l-11.614,6.705v9.9l11.614-6.705a.489.489,0,0,0,.276-.363h.006v-.058a.245.245,0,0,0,0-.025v-9.879A.464.464,0,0,1,362.025,234.165Z" transform="translate(-319.44 -222.217)" fill="url(#linear-gradient-26)"/>
<path id="Path_297" data-name="Path 297" d="M362.025,234.165l-11.614,6.705v9.9l11.614-6.705a.489.489,0,0,0,.276-.363h.006v-.058a.245.245,0,0,0,0-.025v-9.879A.464.464,0,0,1,362.025,234.165Z" transform="translate(-319.44 -222.217)" fill="url(#linear-gradient-27)"/>
</g>
<g id="Group_420" data-name="Group 420" transform="translate(42.865 54.738)" opacity="0.2">
<path id="Path_298" data-name="Path 298" d="M377.431,289.668h0s0,.005,0,.007Z" transform="translate(-377.428 -289.668)" fill="url(#linear-gradient-24)"/>
<path id="Path_299" data-name="Path 299" d="M377.431,289.668h0s0,.005,0,.007Z" transform="translate(-377.428 -289.668)" fill="url(#linear-gradient-25)"/>
</g>
<g id="Group_421" data-name="Group 421" transform="translate(0.003 6.651)" style="mix-blend-mode: color-dodge;isolation: isolate">
<path id="Path_300" data-name="Path 300" d="M322.576,219.066l-11.545,6.666-29.984-17.312a1.988,1.988,0,0,1-.9-.933c-.254.63.042,1.32.9,1.813l29.984,17.312,11.614-6.705C323.078,219.657,322.991,219.266,322.576,219.066Z" transform="translate(-280.062 -195.577)" fill="url(#radial-gradient-7)"/>
<path id="Path_301" data-name="Path 301" d="M401.653,182.647a9.462,9.462,0,0,1-4.7,1.317c-1.012.036-1.49.714-.9,1.161a1.577,1.577,0,0,1,.9-.28,9.461,9.461,0,0,0,4.7-1.317,3.057,3.057,0,0,0,1.688-3.1A3.484,3.484,0,0,1,401.653,182.647Z" transform="translate(-344.846 -180.43)" fill="url(#radial-gradient-8)"/>
<path id="Path_302" data-name="Path 302" d="M376.622,214.016c-.588.34-1.607.132-1.69-.348a4.1,4.1,0,0,0-2.447-2.742,12.077,12.077,0,0,0-9.493-.037c-1.868.935-2.675,2.28-2.441,3.578a4.076,4.076,0,0,1,2.441-2.7,12.077,12.077,0,0,1,9.493.037,4.1,4.1,0,0,1,2.447,2.743c.082.48,1.1.688,1.69.348l11.6-6.7-.762-.44Z" transform="translate(-325.098 -195.729)" fill="url(#radial-gradient-9)"/>
</g>
<path id="Path_303" data-name="Path 303" d="M374.869,215.017c-.685-.007-1.207-2.871-1.167-6.4s.627-6.376,1.312-6.368,1.207,2.871,1.167,6.4S375.554,215.025,374.869,215.017Z" transform="translate(-332.476 -185.996)" fill="url(#radial-gradient-10)" style="mix-blend-mode: color-dodge;isolation: isolate"/>
<ellipse id="Ellipse_20" data-name="Ellipse 20" cx="3.891" cy="7.785" rx="3.891" ry="7.785" transform="translate(36.831 16.321) rotate(-22.34)" fill="url(#radial-gradient-11)" style="mix-blend-mode: color-dodge;isolation: isolate"/>
</g>
<g id="Group_426" data-name="Group 426" transform="translate(359.577 132.186)">
<path id="Path_304" data-name="Path 304" d="M486.283,171.853c2.957,1.707,2.843,4.513-.354,6.112a12.078,12.078,0,0,1-9.493-.037,4.1,4.1,0,0,1-2.447-2.742c-.082-.48-1.1-.688-1.69-.348l-11.6,6.7,11.8,6.815c.764.441.29,1.2-.784,1.241a9.464,9.464,0,0,0-4.7,1.317c-2.372,1.53-2.3,3.9.158,5.406a10.779,10.779,0,0,0,9.931.1,3.566,3.566,0,0,0,2-2.558c.067-.622,1.383-.9,2.149-.457l11.805,6.816,29.8-17.2c1.3-.752,1.3-1.975-.015-2.731L492.857,162.97l-11.614,6.705c-.58.335-.229.92.59.965A10.161,10.161,0,0,1,486.283,171.853Z" transform="translate(-460.701 -162.97)" fill="url(#linear-gradient-30)"/>
<path id="Path_305" data-name="Path 305" d="M486.283,171.853c2.957,1.707,2.843,4.513-.354,6.112a12.078,12.078,0,0,1-9.493-.037,4.1,4.1,0,0,1-2.447-2.742c-.082-.48-1.1-.688-1.69-.348l-11.6,6.7,11.8,6.815c.764.441.29,1.2-.784,1.241a9.464,9.464,0,0,0-4.7,1.317c-2.372,1.53-2.3,3.9.158,5.406a10.779,10.779,0,0,0,9.931.1,3.566,3.566,0,0,0,2-2.558c.067-.622,1.383-.9,2.149-.457l11.805,6.816,29.8-17.2c1.3-.752,1.3-1.975-.015-2.731L492.857,162.97l-11.614,6.705c-.58.335-.229.92.59.965A10.161,10.161,0,0,1,486.283,171.853Z" transform="translate(-460.701 -162.97)" fill="url(#linear-gradient-31)"/>
<path id="Path_306" data-name="Path 306" d="M511.671,187.029c3.2-1.6,3.31-4.405.353-6.112a10.161,10.161,0,0,0-4.45-1.213c-.524-.029-.853-.279-.873-.543l-.016,0v8.812A11.061,11.061,0,0,0,511.671,187.029Z" transform="translate(-486.442 -172.034)" fill="url(#linear-gradient-32)"/>
<g id="Group_423" data-name="Group 423" transform="translate(32.358 18.631)">
<path id="Path_307" data-name="Path 307" d="M564.971,215.2l.022,0v-9.9l-.022.007A1.621,1.621,0,0,1,564,206.7l-29.8,17.2v9.9l29.8-17.2A1.619,1.619,0,0,0,564.971,215.2Z" transform="translate(-534.206 -205.293)" fill="url(#linear-gradient-33)"/>
<path id="Path_308" data-name="Path 308" d="M564.971,215.2l.022,0v-9.9l-.022.007A1.621,1.621,0,0,1,564,206.7l-29.8,17.2v9.9l29.8-17.2A1.619,1.619,0,0,0,564.971,215.2Z" transform="translate(-534.206 -205.293)" fill="url(#linear-gradient-34)"/>
</g>
<path id="Path_309" data-name="Path 309" d="M467.018,214.515a9.464,9.464,0,0,1,4.7-1.317c1.074-.038,1.548-.8.784-1.241l-11.8-6.815v9.9l4.6,2.654.051-.014A3.028,3.028,0,0,1,467.018,214.515Z" transform="translate(-460.701 -186.577)" fill="url(#linear-gradient-35)"/>
<path id="Path_310" data-name="Path 310" d="M505.711,231.822a1.964,1.964,0,0,0-1.318-.174v9.9a1.964,1.964,0,0,1,1.318.174l11.805,6.816v-9.9Z" transform="translate(-485.159 -201.392)" fill="url(#linear-gradient-36)"/>
<path id="Path_311" data-name="Path 311" d="M484.939,232.333a3.566,3.566,0,0,1-2,2.558,10.778,10.778,0,0,1-9.931-.1,3.7,3.7,0,0,1-1.827-2.235l-.051.014v9.17a3.276,3.276,0,0,0,1.878,2.956,10.779,10.779,0,0,0,9.931.1,3.566,3.566,0,0,0,2-2.558c.034-.315.39-.541.831-.631v-9.9C485.329,231.792,484.973,232.018,484.939,232.333Z" transform="translate(-466.536 -201.446)" fill="url(#linear-gradient-37)"/>
<path id="Path_312" data-name="Path 312" d="M484.939,232.333a3.566,3.566,0,0,1-2,2.558,10.778,10.778,0,0,1-9.931-.1,3.7,3.7,0,0,1-1.827-2.235l-.051.014v9.17a3.276,3.276,0,0,0,1.878,2.956,10.779,10.779,0,0,0,9.931.1,3.566,3.566,0,0,0,2-2.558c.034-.315.39-.541.831-.631v-9.9C485.329,231.792,484.973,232.018,484.939,232.333Z" transform="translate(-466.536 -201.446)" fill="url(#linear-gradient-38)"/>
<g id="Group_424" data-name="Group 424" transform="translate(0 7.106)" style="mix-blend-mode: color-dodge;isolation: isolate">
<path id="Path_313" data-name="Path 313" d="M472.625,212.478c.35-.272.365-.68-.12-.961l-11.042-6.375-.762.44,11.8,6.815A1.2,1.2,0,0,1,472.625,212.478Z" transform="translate(-460.701 -193.683)" fill="url(#radial-gradient-12)"/>
<path id="Path_314" data-name="Path 314" d="M507.589,180.117a10.16,10.16,0,0,1,4.45,1.213,3.889,3.889,0,0,1,2.087,2.534c.224-1.215-.467-2.479-2.087-3.414a10.16,10.16,0,0,0-4.45-1.213,1.38,1.38,0,0,1-.522-.124l-.068.04C506.418,179.487,506.769,180.072,507.589,180.117Z" transform="translate(-486.457 -179.112)" fill="url(#radial-gradient-13)"/>
</g>
<path id="Path_315" data-name="Path 315" d="M476.52,239.656c-.9-.01-1.587-3.2-1.543-7.128s.807-7.1,1.7-7.092,1.587,3.2,1.543,7.129S477.417,239.667,476.52,239.656Z" transform="translate(-468.692 -197.938)" fill="url(#radial-gradient-14)" style="mix-blend-mode: color-dodge;isolation: isolate"/>
<g id="Group_425" data-name="Group 425" transform="translate(4.589 18.684)">
<path id="Path_316" data-name="Path 316" d="M487.089,230.822c-.766-.442-2.082-.165-2.149.457a3.566,3.566,0,0,1-2,2.558,10.778,10.778,0,0,1-9.931-.1,3.653,3.653,0,0,1-1.846-2.308c-.207,1.133.408,2.31,1.846,3.188a10.779,10.779,0,0,0,9.931.1,3.566,3.566,0,0,0,2-2.558c.067-.622,1.384-.9,2.149-.457l11.723,6.768v-.88Z" transform="translate(-471.126 -219.516)" fill="url(#radial-gradient-15)" style="mix-blend-mode: color-dodge;isolation: isolate"/>
<path id="Path_317" data-name="Path 317" d="M563.9,207.213c.844-.487,1.134-1.171.881-1.8a1.958,1.958,0,0,1-.881.918l-29.8,17.2-.083-.048v.88l.083.048Z" transform="translate(-506.332 -205.414)" fill="url(#radial-gradient-16)" style="mix-blend-mode: color-dodge;isolation: isolate"/>
</g>
</g>
<g id="Group_428" data-name="Group 428" transform="translate(322.293 159.016)">
<path id="Path_318" data-name="Path 318" d="M422.861,236.6c-2.313,1.994-7.1,2.454-10.458.942-2.7-1.216-3.534-3.686-1.828-5.385a7.814,7.814,0,0,1,4.174-1.9c.8-.136.949-.752.254-1.022l-13.69-5.32-9.233,7.961c-.6.515-1.986.389-2.265-.213a5.2,5.2,0,0,0-3.175-2.419c-3.072-1.058-7.093-.574-9.155,1.1-2.264,1.837-1.431,4.387,1.805,5.645a11.11,11.11,0,0,0,4.744.654c1.071-.078,1.8.616,1.2,1.132l-9.233,7.961,35.17,13.666a5.026,5.026,0,0,0,4.64-.519l23.451-20.221-13.709-5.327c-.685-.266-1.609.042-1.523.515A2.916,2.916,0,0,1,422.861,236.6Z" transform="translate(-376.006 -223.917)" fill="url(#linear-gradient-39)"/>
<path id="Path_319" data-name="Path 319" d="M415.816,277.64a5.025,5.025,0,0,1-4.64.519l-35.17-13.666v9.9l35.17,13.666a5.025,5.025,0,0,0,4.64-.519l23.451-20.221v-9.9Z" transform="translate(-376.006 -242.671)" fill="url(#linear-gradient-40)"/>
<path id="Path_320" data-name="Path 320" d="M384.3,248.151a11.11,11.11,0,0,1-4.744-.654c-1.837-.714-2.9-1.844-3.059-3.025v9.319a2.824,2.824,0,0,0,1.018,2.381l7.99-6.889C386.1,248.767,385.372,248.073,384.3,248.151Z" transform="translate(-376.272 -235.424)" fill="url(#linear-gradient-41)"/>
<path id="Path_321" data-name="Path 321" d="M457.581,237.806a7.814,7.814,0,0,0-4.174,1.9c-1.707,1.7-.869,4.169,1.828,5.385a10.377,10.377,0,0,0,3.008.8V237.4A.819.819,0,0,1,457.581,237.806Z" transform="translate(-418.838 -231.464)" fill="url(#linear-gradient-42)"/>
<g id="Group_427" data-name="Group 427" transform="translate(0 5.799)" style="mix-blend-mode: color-dodge;isolation: isolate">
<path id="Path_322" data-name="Path 322" d="M485.145,247.056a.323.323,0,0,0-.022.13C485.13,247.142,485.14,247.1,485.145,247.056Z" transform="translate(-437.089 -242.669)" fill="url(#radial-gradient-17)"/>
<path id="Path_323" data-name="Path 323" d="M453.411,239.092a2.72,2.72,0,0,0-.844,2.446,2.875,2.875,0,0,1,.844-1.565,7.809,7.809,0,0,1,4.174-1.9c.766-.131.927-.7.328-.983a1.291,1.291,0,0,1-.328.1A7.81,7.81,0,0,0,453.411,239.092Z" transform="translate(-418.842 -237.09)" fill="url(#radial-gradient-18)"/>
<path id="Path_324" data-name="Path 324" d="M379.548,247.524a11.109,11.109,0,0,0,4.744.654,1.72,1.72,0,0,1,1.162.289l.043-.037c.6-.516-.134-1.21-1.2-1.132a11.109,11.109,0,0,1-4.744-.654c-1.778-.691-2.825-1.772-3.038-2.91C376.227,245.173,377.315,246.656,379.548,247.524Z" transform="translate(-376.264 -240.809)" fill="url(#radial-gradient-19)"/>
<path id="Path_325" data-name="Path 325" d="M415.816,277.411a5.024,5.024,0,0,1-4.64.519L376.71,264.537l-.7.607,35.17,13.666a5.024,5.024,0,0,0,4.64-.519l23.451-20.221-.7-.273Z" transform="translate(-376.006 -248.682)" fill="url(#radial-gradient-20)"/>
</g>
<path id="Path_326" data-name="Path 326" d="M459.706,310.946c-.558-.007-.974-3.262-.928-7.272s.535-7.255,1.093-7.248.974,3.262.928,7.271S460.264,310.952,459.706,310.946Z" transform="translate(-422.339 -264.507)" fill="url(#radial-gradient-21)" style="mix-blend-mode: color-dodge;isolation: isolate"/>
<path id="Path_327" data-name="Path 327" d="M381.118,251.425c-.558-.007-.984-2.327-.952-5.183s.511-5.166,1.07-5.16.984,2.327.952,5.183S381.676,251.431,381.118,251.425Z" transform="translate(-378.334 -233.526)" fill="url(#radial-gradient-22)" style="mix-blend-mode: color-dodge;isolation: isolate"/>
<path id="Path_328" data-name="Path 328" d="M458.4,296.9c1.34,3.259.362,6.75-2.184,7.8s-5.7-.748-7.035-4.008-.362-6.75,2.184-7.8S457.06,293.64,458.4,296.9Z" transform="translate(-416.632 -262.361)" fill="url(#radial-gradient-23)" style="mix-blend-mode: color-dodge;isolation: isolate"/>
</g>
</g>
</svg>
';

$svg_my_orders = '
<svg xmlns="http://www.w3.org/2000/svg" width="118.773" height="79" viewBox="0 0 118.773 79">
<g id="Group_443" data-name="Group 443" transform="translate(-134.987 -142.067)">
<g id="Group_432" data-name="Group 432" transform="translate(180.847 209.781)">
<g id="Group_430" data-name="Group 430">
<path id="Path_329" data-name="Path 329" d="M224.235,262.825A5.643,5.643,0,1,1,213.713,260a5.29,5.29,0,0,1,.889-1.168,5.642,5.642,0,0,1,7.98,0,5.289,5.289,0,0,1,.889,1.168A5.629,5.629,0,0,1,224.235,262.825Z" transform="translate(-212.949 -257.182)" fill="#006837"/>
<path id="Path_330" data-name="Path 330" d="M214.247,269.6a5.288,5.288,0,0,1,.889-1.168,5.642,5.642,0,0,1,7.98,0,5.288,5.288,0,0,1,.889,1.168,5.289,5.289,0,0,1-.889,1.168,5.642,5.642,0,0,1-7.98,0A5.289,5.289,0,0,1,214.247,269.6Z" transform="translate(-213.483 -261.132)" fill="#fff" opacity="0.25" style="mix-blend-mode: overlay;isolation: isolate"/>
<path id="Path_331" data-name="Path 331" d="M224.006,260h-9.759a5.29,5.29,0,0,1,.889-1.168,5.642,5.642,0,0,1,7.98,0A5.289,5.289,0,0,1,224.006,260Z" transform="translate(-213.483 -257.182)" opacity="0.25" style="mix-blend-mode: multiply;isolation: isolate"/>
</g>
<g id="Group_431" data-name="Group 431" transform="translate(32.304)">
<path id="Path_332" data-name="Path 332" d="M279.151,262.825A5.643,5.643,0,1,1,268.63,260a5.272,5.272,0,0,1,.889-1.168,5.641,5.641,0,0,1,7.979,0,5.274,5.274,0,0,1,.89,1.168A5.563,5.563,0,0,1,279.151,262.825Z" transform="translate(-267.866 -257.182)" fill="#006837"/>
<path id="Path_333" data-name="Path 333" d="M269.165,269.6a5.287,5.287,0,0,1,.889-1.168,5.642,5.642,0,0,1,7.98,0,5.289,5.289,0,0,1,.889,1.168,5.29,5.29,0,0,1-.889,1.168,5.642,5.642,0,0,1-7.98,0A5.288,5.288,0,0,1,269.165,269.6Z" transform="translate(-268.401 -261.132)" fill="#fff" opacity="0.25" style="mix-blend-mode: overlay;isolation: isolate"/>
<path id="Path_334" data-name="Path 334" d="M278.923,260h-9.759a5.271,5.271,0,0,1,.889-1.168,5.641,5.641,0,0,1,7.979,0A5.274,5.274,0,0,1,278.923,260Z" transform="translate(-268.4 -257.182)" opacity="0.25" style="mix-blend-mode: multiply;isolation: isolate"/>
</g>
</g>
<g id="Group_442" data-name="Group 442" transform="translate(134.987 142.067)">
<g id="Group_436" data-name="Group 436" transform="translate(16.537 3.346)">
<g id="Group_433" data-name="Group 433">
<path id="Path_335" data-name="Path 335" d="M179.637,155.695l-2.755,2.822-2.755,2.821-7.761,7.94a11.244,11.244,0,0,1-3.266-7.94l2.755-2.821,2.755-2.822,7.761-7.94A11.244,11.244,0,0,1,179.637,155.695Z" transform="translate(-163.1 -147.755)" fill="#006837"/>
<path id="Path_336" data-name="Path 336" d="M181.566,161.253l-2.755,2.821H167.784l2.755-2.821Z" transform="translate(-165.029 -153.313)" opacity="0.25" style="mix-blend-mode: multiply;isolation: isolate"/>
</g>
<g id="Group_434" data-name="Group 434" transform="translate(18.038 31.859)">
<path id="Path_337" data-name="Path 337" d="M268.163,211.854l-12.4,2.822-12.4,2.821L199.7,227.435h-.006a11.288,11.288,0,0,1-5.928-9.938l24.8-5.643,43.669-9.938A11.3,11.3,0,0,1,268.163,211.854Z" transform="translate(-193.764 -201.916)" fill="#006837"/>
<path id="Path_338" data-name="Path 338" d="M276.844,218.81l-12.4,2.821h-49.6l12.4-2.821Z" transform="translate(-202.445 -208.873)" opacity="0.25" style="mix-blend-mode: multiply;isolation: isolate"/>
</g>
<g id="Group_435" data-name="Group 435" transform="translate(9.799 14.738)">
<path id="Path_339" data-name="Path 339" d="M272.195,182.941l-15.4,2.821-15.409,2.822-55.313,10.131a11.279,11.279,0,0,1-6.314-10.131l15.408-2.822,15.4-2.821,55.313-10.131A11.278,11.278,0,0,1,272.195,182.941Z" transform="translate(-179.758 -172.81)" fill="#006837"/>
<path id="Path_340" data-name="Path 340" d="M282.98,190.032l-15.4,2.821H205.952l15.4-2.821Z" transform="translate(-190.544 -179.901)" opacity="0.25" style="mix-blend-mode: multiply;isolation: isolate"/>
</g>
</g>
<g id="Group_441" data-name="Group 441">
<g id="Group_437" data-name="Group 437">
<path id="Path_341" data-name="Path 341" d="M168.061,153.353H140.63a5.643,5.643,0,0,1,0-11.286h16.145a11.289,11.289,0,0,1,11.286,11.286Z" transform="translate(-134.987 -142.067)" fill="#d9e021"/>
<path id="Path_342" data-name="Path 342" d="M166.547,147.71h-31.56a5.644,5.644,0,0,1,5.643-5.643h16.145a11.283,11.283,0,0,1,9.772,5.643Z" transform="translate(-134.987 -142.067)" fill="#fff" style="mix-blend-mode: overlay;isolation: isolate"/>
</g>
<g id="Group_438" data-name="Group 438" transform="translate(16.537 16.929)">
<path id="Path_343" data-name="Path 343" d="M265.336,182.132h-90.95A11.289,11.289,0,0,1,163.1,170.846h90.95A11.157,11.157,0,0,1,259.022,172a11.294,11.294,0,0,1,6.314,10.131Z" transform="translate(-163.1 -170.846)" fill="#8cc63f"/>
<path id="Path_344" data-name="Path 344" d="M263.821,176.489H164.614a11.189,11.189,0,0,1-1.514-5.643h90.95A11.157,11.157,0,0,1,259.022,172,11.27,11.27,0,0,1,263.821,176.489Z" transform="translate(-163.1 -170.846)" fill="#fff" opacity="0.5" style="mix-blend-mode: overlay;isolation: isolate"/>
</g>
<g id="Group_439" data-name="Group 439" transform="translate(26.336 33.858)">
<path id="Path_345" data-name="Path 345" d="M262.4,210.91H191.044a11.155,11.155,0,0,1-4.972-1.155,11.292,11.292,0,0,1-6.314-10.131H251.11a11.289,11.289,0,0,1,5.358,1.348,11.449,11.449,0,0,1,4.421,4.295A11.253,11.253,0,0,1,262.4,210.91Z" transform="translate(-179.758 -199.625)" fill="#39b54a"/>
<path id="Path_346" data-name="Path 346" d="M260.889,205.267H181.272a11.206,11.206,0,0,1-1.514-5.642H251.11a11.289,11.289,0,0,1,5.358,1.348A11.449,11.449,0,0,1,260.889,205.267Z" transform="translate(-179.758 -199.625)" fill="#fff" opacity="0.5" style="mix-blend-mode: overlay;isolation: isolate"/>
</g>
<g id="Group_440" data-name="Group 440" transform="translate(34.575 50.786)">
<path id="Path_347" data-name="Path 347" d="M259.924,234.046a5.642,5.642,0,0,1-5.643,5.643H205.049a11.188,11.188,0,0,1-5.351-1.348h-.006a11.412,11.412,0,0,1-4.422-4.3,11.249,11.249,0,0,1-1.506-5.643h60.517A5.642,5.642,0,0,1,259.924,234.046Z" transform="translate(-193.764 -228.403)" fill="#009245"/>
<path id="Path_348" data-name="Path 348" d="M259.924,234.046H195.27a11.249,11.249,0,0,1-1.506-5.643h60.517A5.642,5.642,0,0,1,259.924,234.046Z" transform="translate(-193.764 -228.403)" fill="#fff" opacity="0.5" style="mix-blend-mode: overlay;isolation: isolate"/>
</g>
</g>
</g>
</g>
</svg>
';


$svg_diy = '
<svg id="package" xmlns="http://www.w3.org/2000/svg" width="36.508" height="36.508" viewBox="0 0 36.508 36.508">
<g id="Group_93" data-name="Group 93" transform="translate(10.41 26.383)">
<g id="Group_92" data-name="Group 92">
<path id="Path_45" data-name="Path 45" d="M146.712,370a.713.713,0,1,0,.713.713A.713.713,0,0,0,146.712,370Z" transform="translate(-145.999 -370.002)" fill="#384765"/>
</g>
</g>
<g id="Group_95" data-name="Group 95" transform="translate(0 0)">
<g id="Group_94" data-name="Group 94" transform="translate(0)">
<path id="Path_46" data-name="Path 46" d="M32.1,13.55l4.2-4.2a.713.713,0,0,0-.294-1.186L25.773,5a7.131,7.131,0,0,0-13.421-.537L.5,8.163A.713.713,0,0,0,.208,9.348L4.521,13.66,1.8,18.194a.713.713,0,0,0,.386,1.043l3.945,1.315V31.519a.713.713,0,0,0,.463.668c2.412.9,11.374,4.266,11.422,4.283a.71.71,0,0,0,.456.006l.006,0L31.314,32.2a.713.713,0,0,0,.488-.676V20.258l4.207-1.322a.713.713,0,0,0,.29-1.184Zm-6-6.417c0-.181-.008-.362-.021-.542l8.378,2.586L30.9,12.734,25.083,10.8A7.151,7.151,0,0,0,26.1,7.133ZM13.571,5.277a5.7,5.7,0,0,1,11.1,1.856,5.7,5.7,0,0,1-5.7,5.7,5.709,5.709,0,0,1-5.4-7.56Zm-11.52,3.9L11.912,6.1a7.189,7.189,0,0,0-.076,1.034,7.088,7.088,0,0,0,.79,3.263L5.611,12.734Zm1.431,8.992,2.255-3.758,11.449,3.816L14.93,21.981Zm14.059,16.6L7.558,31.025v-10c7.854,2.6,7.471,2.525,7.689,2.525a.713.713,0,0,0,.612-.346l1.682-2.8Zm.713-17.692L7.674,13.55l5.761-1.92A7.129,7.129,0,0,0,24.178,12l4.655,1.552ZM30.375,31l-11.409,3.8V19.861l2.528,3.16a.713.713,0,0,0,.771.235l8.11-2.549ZM22.3,21.748l-2.854-3.567L30.9,14.366l3.563,3.563Z" transform="translate(0 -0.002)" fill="#384765"/>
</g>
</g>
<g id="Group_97" data-name="Group 97" transform="translate(13.103 27.325)">
<g id="Group_96" data-name="Group 96">
<path id="Path_47" data-name="Path 47" d="M186.306,383.859l-1.586-.595a.713.713,0,1,0-.5,1.335l1.586.595a.713.713,0,1,0,.5-1.335Z" transform="translate(-183.757 -383.219)" fill="#384765"/>
</g>
</g>
<g id="Group_99" data-name="Group 99" transform="translate(10.41 29.362)">
<g id="Group_98" data-name="Group 98">
<path id="Path_48" data-name="Path 48" d="M151.237,413.429l-4.278-1.6a.713.713,0,1,0-.5,1.335l4.278,1.6a.713.713,0,1,0,.5-1.335Z" transform="translate(-145.995 -411.779)" fill="#384765"/>
</g>
</g>
<g id="Group_101" data-name="Group 101" transform="translate(16.115 4.278)">
<g id="Group_100" data-name="Group 100">
<path id="Path_49" data-name="Path 49" d="M232.92,60.21a.713.713,0,0,0-1.008,0l-3.774,3.774-.922-.922a.713.713,0,1,0-1.008,1.008l1.426,1.426a.713.713,0,0,0,1.008,0l4.278-4.278A.713.713,0,0,0,232.92,60.21Z" transform="translate(-225.998 -60.001)" fill="#384765"/>
</g>
</g>
</svg>
';


$svg_users = '<svg id="Group_156" data-name="Group156" xmlns="http://www.w3.org/2000/svg" width="40.378" height="24.672" viewBox="0 0 40.378 24.672">
<path id="Path_62" data-name="Path 62" d="M304.315,199.057a4.615,4.615,0,1,0-4.615-4.615A4.62,4.62,0,0,0,304.315,199.057Zm0-7.385a2.77,2.77,0,1,1-2.77,2.77A2.773,2.773,0,0,1,304.315,191.672Z" transform="translate(-271.553 -187.507)" fill="#384765"/>
<path id="Path_63" data-name="Path 63" d="M308.141,279.864a7.622,7.622,0,0,0-3.592.9.922.922,0,1,0,.872,1.626,5.772,5.772,0,0,1,8.416,4.167h-5.7a.923.923,0,0,0,0,1.845h6.693a.922.922,0,0,0,.923-.923,7.624,7.624,0,0,0-7.615-7.615Z" transform="translate(-275.379 -266.468)" fill="#384765"/>
<path id="Path_64" data-name="Path 64" d="M78.572,286.556H72.794a5.772,5.772,0,0,1,8.416-4.167.922.922,0,1,0,.872-1.626,7.616,7.616,0,0,0-11.206,6.716.922.922,0,0,0,.923.923h6.775a.923.923,0,1,0,0-1.845Z" transform="translate(-70.875 -266.468)" fill="#384765"/>
<path id="Path_65" data-name="Path 65" d="M99.878,199.057a4.615,4.615,0,1,0-4.615-4.615A4.62,4.62,0,0,0,99.878,199.057Zm0-7.385a2.77,2.77,0,1,1-2.77,2.77A2.773,2.773,0,0,1,99.878,191.672Z" transform="translate(-92.263 -187.507)" fill="#384765"/>
<path id="Path_66" data-name="Path 66" d="M192.636,182.847a5.942,5.942,0,1,0-5.942-5.942A5.949,5.949,0,0,0,192.636,182.847Zm0-10.039a4.1,4.1,0,1,1-4.1,4.1A4.1,4.1,0,0,1,192.636,172.808Z" transform="translate(-172.447 -170.963)" fill="#384765"/>
<path id="Path_67" data-name="Path 67" d="M163.56,282.575a10.032,10.032,0,0,0-10.02,10.02.922.922,0,0,0,.923.923h18.2a.922.922,0,0,0,.923-.923A10.032,10.032,0,0,0,163.56,282.575Zm-8.123,9.1a8.176,8.176,0,0,1,16.247,0Z" transform="translate(-143.372 -268.846)" fill="#384765"/>
</svg>
';



?>

