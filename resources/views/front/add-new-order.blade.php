@extends('front.layout.main')

@section('content')
   <div style="width: 60%;margin-left: 50px;"><br><br><br>
      <form action="{{route('add-new-order')}}" method="POST">
         @csrf
         <div class="box box-info">
            <div class="box-header with-border">
               <h3 class="box-title"><i class="fa fa-male"></i> <b> Customer Information </b></h3><br>
            </div>
            <div class="form-group">
               <label for="first_name">First Name * </label>
               <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
            </div>
            <div class="form-group">
               <label for="surname">Surname</label>
               <input type="text" class="form-control" name="surname" id="surname" placeholder="Surnames">
            </div>
            <div class="form-group">
               <label for="dob">Date of Birth</label>
               <input type="date" class="form-control" name="dob" id="dob">
            </div>
            <div class="form-group">
               <label for="document_number">Document Number * </label>
               <input type="number" class="form-control" name="document_number" id="document_number" placeholder="Document Number">
            </div>
            <div class="form-group">
               <label for="phone">Phone *</label>
               <input type="number" class="form-control" name="phone" id="phone" placeholder="Surnames">
            </div>
            <div class="form-group">
               <label for="email">Email</label>
               <input type="Email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group">
               <label for="address">Address</label>
               <input type="text" class="form-control" name="address" id="address" placeholder="Address">
            </div>
            <div class="form-group">
               <label for="cap">CAP / Post Code</label>
               <input type="text" class="form-control" name="cap" id="cap" placeholder="">
            </div>
            <div class="form-group">
               <label for="country">Country *</label>
               <select id="country" name="country" class="form-control" style="width: 100%;">
                  <option value="0">---Select---</option>
                  <option value="2" >
                     AFGHANISTAN
                  </option>
                  <option value="3" >
                     ALBANIA
                  </option>
                  <option value="505" >
                     ALGERIA
                  </option>
                  <option value="5" >
                     AMERICAN SAMOA
                  </option>
                  <option value="6" >
                     ANDORRA
                  </option>
                  <option value="7" >
                     ANGOLA
                  </option>
                  <option value="8" >
                     ANGUILLA
                  </option>
                  <option value="9" >
                     ANTIGUA &amp; BARBUDA
                  </option>
                  <option value="10" >
                     ARGENTINA
                  </option>
                  <option value="11" >
                     ARMENIA
                  </option>
                  <option value="12" >
                     ARUBA
                  </option>
                  <option value="13" >
                     AUSTRALIA
                  </option>
                  <option value="22" >
                     AUSTRIA
                  </option>
                  <option value="14" >
                     AZERBAIJAN
                  </option>
                  <option value="300" >
                     BAHAMAS, THE
                  </option>
                  <option value="16" >
                     BAHRAIN
                  </option>
                  <option value="1" >
                     BANGLADESH
                  </option>
                  <option value="17" >
                     BARBADOS
                  </option>
                  <option value="18" >
                     BELARUS
                  </option>
                  <option value="19" >
                     BELGIUM
                  </option>
                  <option value="20" >
                     BELIZE
                  </option>
                  <option value="21" >
                     BENIN
                  </option>
                  <option value="501" >
                     BERMUDA
                  </option>
                  <option value="23" >
                     BHUTAN
                  </option>
                  <option value="24" >
                     BOLIVIA
                  </option>
                  <option value="25" >
                     BOSNIA &amp; HERZEGOVINA
                  </option>
                  <option value="26" >
                     BOTSWANA
                  </option>
                  <option value="27" >
                     BRAZIL
                  </option>
                  <option value="28" >
                     BRITISH VIRGIN IS.
                  </option>
                  <option value="29" >
                     BRUNEI
                  </option>
                  <option value="30" >
                     BULGARIA
                  </option>
                  <option value="503" >
                     BURKINA FASO
                  </option>
                  <option value="32" >
                     BURMA
                  </option>
                  <option value="33" >
                     BURUNDI
                  </option>
                  <option value="34" >
                     CAMBODIA
                  </option>
                  <option value="35" >
                     CAMEROON
                  </option>
                  <option value="502" >
                     CANADA
                  </option>
                  <option value="504" >
                     CAPE VERDE
                  </option>
                  <option value="38" >
                     CAYMAN ISLANDS
                  </option>
                  <option value="39" >
                     CENTRAL AFRICAN REP.
                  </option>
                  <option value="40" >
                     CHAD
                  </option>
                  <option value="41" >
                     CHILE
                  </option>
                  <option value="42" >
                     CHINA
                  </option>
                  <option value="43" >
                     COLOMBIA
                  </option>
                  <option value="44" >
                     COMOROS
                  </option>
                  <option value="45" >
                     CONGO, DEM. REP.
                  </option>
                  <option value="46" >
                     CONGO, REPUB. OF THE
                  </option>
                  <option value="47" >
                     COOK ISLANDS
                  </option>
                  <option value="48" >
                     COSTA RICA
                  </option>
                  <option value="49" >
                     COTE D&#039;IVOIRE
                  </option>
                  <option value="50" >
                     CROATIA
                  </option>
                  <option value="51" >
                     CUBA
                  </option>
                  <option value="52" >
                     CYPRUS
                  </option>
                  <option value="53" >
                     CZECH REPUBLIC
                  </option>
                  <option value="31" >
                     DENMARK
                  </option>
                  <option value="54" >
                     DJIBOUTI
                  </option>
                  <option value="55" >
                     DOMINICA
                  </option>
                  <option value="56" >
                     DOMINICAN REPUBLIC
                  </option>
                  <option value="57" >
                     EAST TIMOR
                  </option>
                  <option value="58" >
                     ECUADOR
                  </option>
                  <option value="59" >
                     EGYPT
                  </option>
                  <option value="60" >
                     EL SALVADOR
                  </option>
                  <option value="61" >
                     EQUATORIAL GUINEA
                  </option>
                  <option value="62" >
                     ERITREA
                  </option>
                  <option value="63" >
                     ESTONIA
                  </option>
                  <option value="64" >
                     ETHIOPIA
                  </option>
                  <option value="65" >
                     FAROE ISLANDS
                  </option>
                  <option value="66" >
                     FIJI
                  </option>
                  <option value="67" >
                     FINLAND
                  </option>
                  <option value="36" >
                     FRANCE
                  </option>
                  <option value="68" >
                     FRENCH GUIANA
                  </option>
                  <option value="69" >
                     FRENCH POLYNESIA
                  </option>
                  <option value="70" >
                     GABON
                  </option>
                  <option value="71" >
                     GAMBIA, THE
                  </option>
                  <option value="72" >
                     GAZA STRIP
                  </option>
                  <option value="73" >
                     GEORGIA
                  </option>
                  <option value="37" >
                     GERMANY
                  </option>
                  <option value="74" >
                     GHANA
                  </option>
                  <option value="75" >
                     GIBRALTAR
                  </option>
                  <option value="76" >
                     GREECE
                  </option>
                  <option value="77" >
                     GREENLAND
                  </option>
                  <option value="78" >
                     GRENADA
                  </option>
                  <option value="79" >
                     GUADELOUPE
                  </option>
                  <option value="80" >
                     GUAM
                  </option>
                  <option value="81" >
                     GUATEMALA
                  </option>
                  <option value="82" >
                     GUERNSEY
                  </option>
                  <option value="83" >
                     GUINEA
                  </option>
                  <option value="84" >
                     GUINEA-BISSAU
                  </option>
                  <option value="85" >
                     GUYANA
                  </option>
                  <option value="86" >
                     HAITI
                  </option>
                  <option value="87" >
                     HONDURAS
                  </option>
                  <option value="88" >
                     HONG KONG
                  </option>
                  <option value="89" >
                     HUNGARY
                  </option>
                  <option value="90" >
                     ICELAND
                  </option>
                  <option value="91" >
                     INDIA
                  </option>
                  <option value="92" >
                     INDONESIA
                  </option>
                  <option value="93" >
                     IRAN
                  </option>
                  <option value="94" >
                     IRAQ
                  </option>
                  <option value="95" >
                     IRELAND
                  </option>
                  <option value="96" >
                     ISLE OF MAN
                  </option>
                  <option value="97" >
                     ISRAEL
                  </option>
                  <option value="15" >
                     ITALY
                  </option>
                  <option value="99" >
                     JAMAICA
                  </option>
                  <option value="100" >
                     JAPAN
                  </option>
                  <option value="101" >
                     JERSEY
                  </option>
                  <option value="102" >
                     JORDAN
                  </option>
                  <option value="103" >
                     KAZAKHSTAN
                  </option>
                  <option value="104" >
                     KENYA
                  </option>
                  <option value="105" >
                     KIRIBATI
                  </option>
                  <option value="106" >
                     KOREA, NORTH
                  </option>
                  <option value="107" >
                     KOREA, SOUTH
                  </option>
                  <option value="108" >
                     KUWAIT
                  </option>
                  <option value="109" >
                     KYRGYZSTAN
                  </option>
                  <option value="110" >
                     LAOS
                  </option>
                  <option value="111" >
                     LATVIA
                  </option>
                  <option value="112" >
                     LEBANON
                  </option>
                  <option value="113" >
                     LESOTHO
                  </option>
                  <option value="114" >
                     LIBERIA
                  </option>
                  <option value="115" >
                     LIBYA
                  </option>
                  <option value="116" >
                     LIECHTENSTEIN
                  </option>
                  <option value="117" >
                     LITHUANIA
                  </option>
                  <option value="118" >
                     LUXEMBOURG
                  </option>
                  <option value="119" >
                     MACAU
                  </option>
                  <option value="120" >
                     MACEDONIA
                  </option>
                  <option value="121" >
                     MADAGASCAR
                  </option>
                  <option value="122" >
                     MALAWI
                  </option>
                  <option value="123" >
                     MALAYSIA
                  </option>
                  <option value="124" >
                     MALDIVES
                  </option>
                  <option value="125" >
                     MALI
                  </option>
                  <option value="126" >
                     MALTA
                  </option>
                  <option value="127" >
                     MARSHALL ISLANDS
                  </option>
                  <option value="128" >
                     MARTINIQUE
                  </option>
                  <option value="129" >
                     MAURITANIA
                  </option>
                  <option value="130" >
                     MAURITIUS
                  </option>
                  <option value="131" >
                     MAYOTTE
                  </option>
                  <option value="132" >
                     MEXICO
                  </option>
                  <option value="133" >
                     MICRONESIA, FED. ST.
                  </option>
                  <option value="134" >
                     MOLDOVA
                  </option>
                  <option value="135" >
                     MONACO
                  </option>
                  <option value="136" >
                     MONGOLIA
                  </option>
                  <option value="137" >
                     MONTSERRAT
                  </option>
                  <option value="138" >
                     MOROCCO
                  </option>
                  <option value="139" >
                     MOZAMBIQUE
                  </option>
                  <option value="140" >
                     N. MARIANA ISLANDS
                  </option>
                  <option value="141" >
                     NAMIBIA
                  </option>
                  <option value="142" >
                     NAURU
                  </option>
                  <option value="143" >
                     NEPAL
                  </option>
                  <option value="144" >
                     NETHERLANDS
                  </option>
                  <option value="145" >
                     NETHERLANDS ANTILLES
                  </option>
                  <option value="146" >
                     NEW CALEDONIA
                  </option>
                  <option value="147" >
                     NEW ZEALAND
                  </option>
                  <option value="148" >
                     NICARAGUA
                  </option>
                  <option value="149" >
                     NIGER
                  </option>
                  <option value="150" >
                     NIGERIA
                  </option>
                  <option value="151" >
                     NORWAY
                  </option>
                  <option value="152" >
                     OMAN
                  </option>
                  <option value="153" >
                     PAKISTAN
                  </option>
                  <option value="154" >
                     PALAU
                  </option>
                  <option value="155" >
                     PANAMA
                  </option>
                  <option value="156" >
                     PAPUA NEW GUINEA
                  </option>
                  <option value="157" >
                     PARAGUAY
                  </option>
                  <option value="158" >
                     PERU
                  </option>
                  <option value="159" >
                     PHILIPPINES
                  </option>
                  <option value="160" >
                     POLAND
                  </option>
                  <option value="161" >
                     PORTUGAL
                  </option>
                  <option value="162" >
                     PUERTO RICO
                  </option>
                  <option value="163" >
                     QATAR
                  </option>
                  <option value="164" >
                     REUNION
                  </option>
                  <option value="165" >
                     ROMANIA
                  </option>
                  <option value="166" >
                     RUSSIA
                  </option>
                  <option value="167" >
                     RWANDA
                  </option>
                  <option value="168" >
                     SAINT HELENA
                  </option>
                  <option value="169" >
                     SAINT KITTS &amp; NEVIS
                  </option>
                  <option value="170" >
                     SAINT LUCIA
                  </option>
                  <option value="171" >
                     SAINT VINCENT AND THE GRENADINES
                  </option>
                  <option value="172" >
                     SAMOA
                  </option>
                  <option value="173" >
                     SAN MARINO
                  </option>
                  <option value="174" >
                     SAO TOME &amp; PRINCIPE
                  </option>
                  <option value="175" >
                     SAUDI ARABIA
                  </option>
                  <option value="176" >
                     SENEGAL
                  </option>
                  <option value="177" >
                     SERBIA
                  </option>
                  <option value="178" >
                     SEYCHELLES
                  </option>
                  <option value="179" >
                     SIERRA LEONE
                  </option>
                  <option value="180" >
                     SINGAPORE
                  </option>
                  <option value="181" >
                     SLOVAKIA
                  </option>
                  <option value="182" >
                     SLOVENIA
                  </option>
                  <option value="183" >
                     SOLOMON ISLANDS
                  </option>
                  <option value="184" >
                     SOMALIA
                  </option>
                  <option value="185" >
                     SOUTH AFRICA
                  </option>
                  <option value="186" >
                     SPAIN
                  </option>
                  <option value="187" >
                     SRI LANKA
                  </option>
                  <option value="188" >
                     ST PIERRE &amp; MIQUELON
                  </option>
                  <option value="189" >
                     SUDAN
                  </option>
                  <option value="190" >
                     SURINAME
                  </option>
                  <option value="191" >
                     SWAZILAND
                  </option>
                  <option value="192" >
                     SWEDEN
                  </option>
                  <option value="193" >
                     SWITZERLAND
                  </option>
                  <option value="194" >
                     SYRIA
                  </option>
                  <option value="195" >
                     TAIWAN
                  </option>
                  <option value="196" >
                     TAJIKISTAN
                  </option>
                  <option value="197" >
                     TANZANIA
                  </option>
                  <option value="198" >
                     THAILAND
                  </option>
                  <option value="199" >
                     TOGO
                  </option>
                  <option value="200" >
                     TONGA
                  </option>
                  <option value="201" >
                     TRINIDAD &amp; TOBAGO
                  </option>
                  <option value="202" >
                     TUNISIA
                  </option>
                  <option value="203" >
                     TURKEY
                  </option>
                  <option value="204" >
                     TURKMENISTAN
                  </option>
                  <option value="205" >
                     TURKS &amp; CAICOS IS
                  </option>
                  <option value="206" >
                     TUVALU
                  </option>
                  <option value="207" >
                     UGANDA
                  </option>
                  <option value="4" >
                     UK
                  </option>
                  <option value="208" >
                     UKRAINE
                  </option>
                  <option value="209" >
                     UNITED ARAB EMIRATES
                  </option>
                  <option value="210" >
                     UNITED KINGDOM
                  </option>
                  <option value="211" >
                     UNITED STATES
                  </option>
                  <option value="212" >
                     URUGUAY
                  </option>
                  <option value="213" >
                     UZBEKISTAN
                  </option>
                  <option value="214" >
                     VANUATU
                  </option>
                  <option value="215" >
                     VENEZUELA
                  </option>
                  <option value="216" >
                     VIETNAM
                  </option>
                  <option value="217" >
                     VIRGIN ISLANDS
                  </option>
                  <option value="218" >
                     WALLIS AND FUTUNA
                  </option>
                  <option value="219" >
                     WEST BANK
                  </option>
                  <option value="220" >
                     WESTERN SAHARA
                  </option>
                  <option value="221" >
                     YEMEN
                  </option>
                  <option value="222" >
                     ZAMBIA
                  </option>
                  <option value="223" >
                     ZIMBABWE
                  </option>
               </select>
            </div>
            <div class="form-group">
               <label for="state">State/division</label>
               <input type="text" class="form-control" name="state" id="state">
            </div>
            <div class="form-group">
               <label for="dist">District/Province</label>
               <input type="text" class="form-control" name="dist" id="dist">
            </div>
            <div class="form-group">
               <label for="city">City /Thana</label>
               <input type="text" class="form-control" name="city" id="city">
            </div>
         </div>

         <div>&nbsp;</div>

         <div class="box box-info">
            <div class="box-header with-border">
               <h3 class="box-title"><i class="fa fa-user"></i> <b> Receiver Information </b></h3><br>
            </div>            
            <div class="form-group">
               <label for="rfirst_name">First Name * </label>
               <input type="text" class="form-control" name="rfirst_name" id="rfirst_name" placeholder="First Name">
            </div>
            <div class="form-group">
               <label for="rsurname">Surname</label>
               <input type="text" class="form-control" name="rsurname" id="rsurname" placeholder="Surnames">
            </div>
            <div class="form-group">
               <label for="dob">Date of Birth</label>
               <input type="date" class="form-control" name="dob" id="dob">
            </div>
            <div class="form-group">
               <label for="rdocument_number">Document Number * </label>
               <input type="number" class="form-control" name="rdocument_number" id="rdocument_number" placeholder="Document Number">
            </div>
            <div class="form-group">
               <label for="rphone">Phone *</label>
               <input type="number" class="form-control" name="rphone" id="rphone" placeholder="Surnames">
            </div>
            <div class="form-group">
               <label for="remail">Email</label>
               <input type="Email" class="form-control" name="remail" id="remail" placeholder="Email">
            </div>
            <div class="form-group">
               <label for="raddress">Address</label>
               <input type="text" class="form-control" name="raddress" id="raddress" placeholder="Address">
            </div>
            <div class="form-group">
               <label for="rcap">CAP / Post Code</label>
               <input type="text" class="form-control" name="rcap" id="rcap" placeholder="">
            </div>
            <div class="form-group">
               <label for="rcountry">Country *</label>
               <select id="rcountry" name="rcountry" class="form-control" style="width: 100%;">
                  <option value="0">---Select---</option>
                  <option value="2" >
                     AFGHANISTAN
                  </option>
                  <option value="3" >
                     ALBANIA
                  </option>
                  <option value="505" >
                     ALGERIA
                  </option>
                  <option value="5" >
                     AMERICAN SAMOA
                  </option>
                  <option value="6" >
                     ANDORRA
                  </option>
                  <option value="7" >
                     ANGOLA
                  </option>
                  <option value="8" >
                     ANGUILLA
                  </option>
                  <option value="9" >
                     ANTIGUA &amp; BARBUDA
                  </option>
                  <option value="10" >
                     ARGENTINA
                  </option>
                  <option value="11" >
                     ARMENIA
                  </option>
                  <option value="12" >
                     ARUBA
                  </option>
                  <option value="13" >
                     AUSTRALIA
                  </option>
                  <option value="22" >
                     AUSTRIA
                  </option>
                  <option value="14" >
                     AZERBAIJAN
                  </option>
                  <option value="300" >
                     BAHAMAS, THE
                  </option>
                  <option value="16" >
                     BAHRAIN
                  </option>
                  <option value="1" >
                     BANGLADESH
                  </option>
                  <option value="17" >
                     BARBADOS
                  </option>
                  <option value="18" >
                     BELARUS
                  </option>
                  <option value="19" >
                     BELGIUM
                  </option>
                  <option value="20" >
                     BELIZE
                  </option>
                  <option value="21" >
                     BENIN
                  </option>
                  <option value="501" >
                     BERMUDA
                  </option>
                  <option value="23" >
                     BHUTAN
                  </option>
                  <option value="24" >
                     BOLIVIA
                  </option>
                  <option value="25" >
                     BOSNIA &amp; HERZEGOVINA
                  </option>
                  <option value="26" >
                     BOTSWANA
                  </option>
                  <option value="27" >
                     BRAZIL
                  </option>
                  <option value="28" >
                     BRITISH VIRGIN IS.
                  </option>
                  <option value="29" >
                     BRUNEI
                  </option>
                  <option value="30" >
                     BULGARIA
                  </option>
                  <option value="503" >
                     BURKINA FASO
                  </option>
                  <option value="32" >
                     BURMA
                  </option>
                  <option value="33" >
                     BURUNDI
                  </option>
                  <option value="34" >
                     CAMBODIA
                  </option>
                  <option value="35" >
                     CAMEROON
                  </option>
                  <option value="502" >
                     CANADA
                  </option>
                  <option value="504" >
                     CAPE VERDE
                  </option>
                  <option value="38" >
                     CAYMAN ISLANDS
                  </option>
                  <option value="39" >
                     CENTRAL AFRICAN REP.
                  </option>
                  <option value="40" >
                     CHAD
                  </option>
                  <option value="41" >
                     CHILE
                  </option>
                  <option value="42" >
                     CHINA
                  </option>
                  <option value="43" >
                     COLOMBIA
                  </option>
                  <option value="44" >
                     COMOROS
                  </option>
                  <option value="45" >
                     CONGO, DEM. REP.
                  </option>
                  <option value="46" >
                     CONGO, REPUB. OF THE
                  </option>
                  <option value="47" >
                     COOK ISLANDS
                  </option>
                  <option value="48" >
                     COSTA RICA
                  </option>
                  <option value="49" >
                     COTE D&#039;IVOIRE
                  </option>
                  <option value="50" >
                     CROATIA
                  </option>
                  <option value="51" >
                     CUBA
                  </option>
                  <option value="52" >
                     CYPRUS
                  </option>
                  <option value="53" >
                     CZECH REPUBLIC
                  </option>
                  <option value="31" >
                     DENMARK
                  </option>
                  <option value="54" >
                     DJIBOUTI
                  </option>
                  <option value="55" >
                     DOMINICA
                  </option>
                  <option value="56" >
                     DOMINICAN REPUBLIC
                  </option>
                  <option value="57" >
                     EAST TIMOR
                  </option>
                  <option value="58" >
                     ECUADOR
                  </option>
                  <option value="59" >
                     EGYPT
                  </option>
                  <option value="60" >
                     EL SALVADOR
                  </option>
                  <option value="61" >
                     EQUATORIAL GUINEA
                  </option>
                  <option value="62" >
                     ERITREA
                  </option>
                  <option value="63" >
                     ESTONIA
                  </option>
                  <option value="64" >
                     ETHIOPIA
                  </option>
                  <option value="65" >
                     FAROE ISLANDS
                  </option>
                  <option value="66" >
                     FIJI
                  </option>
                  <option value="67" >
                     FINLAND
                  </option>
                  <option value="36" >
                     FRANCE
                  </option>
                  <option value="68" >
                     FRENCH GUIANA
                  </option>
                  <option value="69" >
                     FRENCH POLYNESIA
                  </option>
                  <option value="70" >
                     GABON
                  </option>
                  <option value="71" >
                     GAMBIA, THE
                  </option>
                  <option value="72" >
                     GAZA STRIP
                  </option>
                  <option value="73" >
                     GEORGIA
                  </option>
                  <option value="37" >
                     GERMANY
                  </option>
                  <option value="74" >
                     GHANA
                  </option>
                  <option value="75" >
                     GIBRALTAR
                  </option>
                  <option value="76" >
                     GREECE
                  </option>
                  <option value="77" >
                     GREENLAND
                  </option>
                  <option value="78" >
                     GRENADA
                  </option>
                  <option value="79" >
                     GUADELOUPE
                  </option>
                  <option value="80" >
                     GUAM
                  </option>
                  <option value="81" >
                     GUATEMALA
                  </option>
                  <option value="82" >
                     GUERNSEY
                  </option>
                  <option value="83" >
                     GUINEA
                  </option>
                  <option value="84" >
                     GUINEA-BISSAU
                  </option>
                  <option value="85" >
                     GUYANA
                  </option>
                  <option value="86" >
                     HAITI
                  </option>
                  <option value="87" >
                     HONDURAS
                  </option>
                  <option value="88" >
                     HONG KONG
                  </option>
                  <option value="89" >
                     HUNGARY
                  </option>
                  <option value="90" >
                     ICELAND
                  </option>
                  <option value="91" >
                     INDIA
                  </option>
                  <option value="92" >
                     INDONESIA
                  </option>
                  <option value="93" >
                     IRAN
                  </option>
                  <option value="94" >
                     IRAQ
                  </option>
                  <option value="95" >
                     IRELAND
                  </option>
                  <option value="96" >
                     ISLE OF MAN
                  </option>
                  <option value="97" >
                     ISRAEL
                  </option>
                  <option value="15" >
                     ITALY
                  </option>
                  <option value="99" >
                     JAMAICA
                  </option>
                  <option value="100" >
                     JAPAN
                  </option>
                  <option value="101" >
                     JERSEY
                  </option>
                  <option value="102" >
                     JORDAN
                  </option>
                  <option value="103" >
                     KAZAKHSTAN
                  </option>
                  <option value="104" >
                     KENYA
                  </option>
                  <option value="105" >
                     KIRIBATI
                  </option>
                  <option value="106" >
                     KOREA, NORTH
                  </option>
                  <option value="107" >
                     KOREA, SOUTH
                  </option>
                  <option value="108" >
                     KUWAIT
                  </option>
                  <option value="109" >
                     KYRGYZSTAN
                  </option>
                  <option value="110" >
                     LAOS
                  </option>
                  <option value="111" >
                     LATVIA
                  </option>
                  <option value="112" >
                     LEBANON
                  </option>
                  <option value="113" >
                     LESOTHO
                  </option>
                  <option value="114" >
                     LIBERIA
                  </option>
                  <option value="115" >
                     LIBYA
                  </option>
                  <option value="116" >
                     LIECHTENSTEIN
                  </option>
                  <option value="117" >
                     LITHUANIA
                  </option>
                  <option value="118" >
                     LUXEMBOURG
                  </option>
                  <option value="119" >
                     MACAU
                  </option>
                  <option value="120" >
                     MACEDONIA
                  </option>
                  <option value="121" >
                     MADAGASCAR
                  </option>
                  <option value="122" >
                     MALAWI
                  </option>
                  <option value="123" >
                     MALAYSIA
                  </option>
                  <option value="124" >
                     MALDIVES
                  </option>
                  <option value="125" >
                     MALI
                  </option>
                  <option value="126" >
                     MALTA
                  </option>
                  <option value="127" >
                     MARSHALL ISLANDS
                  </option>
                  <option value="128" >
                     MARTINIQUE
                  </option>
                  <option value="129" >
                     MAURITANIA
                  </option>
                  <option value="130" >
                     MAURITIUS
                  </option>
                  <option value="131" >
                     MAYOTTE
                  </option>
                  <option value="132" >
                     MEXICO
                  </option>
                  <option value="133" >
                     MICRONESIA, FED. ST.
                  </option>
                  <option value="134" >
                     MOLDOVA
                  </option>
                  <option value="135" >
                     MONACO
                  </option>
                  <option value="136" >
                     MONGOLIA
                  </option>
                  <option value="137" >
                     MONTSERRAT
                  </option>
                  <option value="138" >
                     MOROCCO
                  </option>
                  <option value="139" >
                     MOZAMBIQUE
                  </option>
                  <option value="140" >
                     N. MARIANA ISLANDS
                  </option>
                  <option value="141" >
                     NAMIBIA
                  </option>
                  <option value="142" >
                     NAURU
                  </option>
                  <option value="143" >
                     NEPAL
                  </option>
                  <option value="144" >
                     NETHERLANDS
                  </option>
                  <option value="145" >
                     NETHERLANDS ANTILLES
                  </option>
                  <option value="146" >
                     NEW CALEDONIA
                  </option>
                  <option value="147" >
                     NEW ZEALAND
                  </option>
                  <option value="148" >
                     NICARAGUA
                  </option>
                  <option value="149" >
                     NIGER
                  </option>
                  <option value="150" >
                     NIGERIA
                  </option>
                  <option value="151" >
                     NORWAY
                  </option>
                  <option value="152" >
                     OMAN
                  </option>
                  <option value="153" >
                     PAKISTAN
                  </option>
                  <option value="154" >
                     PALAU
                  </option>
                  <option value="155" >
                     PANAMA
                  </option>
                  <option value="156" >
                     PAPUA NEW GUINEA
                  </option>
                  <option value="157" >
                     PARAGUAY
                  </option>
                  <option value="158" >
                     PERU
                  </option>
                  <option value="159" >
                     PHILIPPINES
                  </option>
                  <option value="160" >
                     POLAND
                  </option>
                  <option value="161" >
                     PORTUGAL
                  </option>
                  <option value="162" >
                     PUERTO RICO
                  </option>
                  <option value="163" >
                     QATAR
                  </option>
                  <option value="164" >
                     REUNION
                  </option>
                  <option value="165" >
                     ROMANIA
                  </option>
                  <option value="166" >
                     RUSSIA
                  </option>
                  <option value="167" >
                     RWANDA
                  </option>
                  <option value="168" >
                     SAINT HELENA
                  </option>
                  <option value="169" >
                     SAINT KITTS &amp; NEVIS
                  </option>
                  <option value="170" >
                     SAINT LUCIA
                  </option>
                  <option value="171" >
                     SAINT VINCENT AND THE GRENADINES
                  </option>
                  <option value="172" >
                     SAMOA
                  </option>
                  <option value="173" >
                     SAN MARINO
                  </option>
                  <option value="174" >
                     SAO TOME &amp; PRINCIPE
                  </option>
                  <option value="175" >
                     SAUDI ARABIA
                  </option>
                  <option value="176" >
                     SENEGAL
                  </option>
                  <option value="177" >
                     SERBIA
                  </option>
                  <option value="178" >
                     SEYCHELLES
                  </option>
                  <option value="179" >
                     SIERRA LEONE
                  </option>
                  <option value="180" >
                     SINGAPORE
                  </option>
                  <option value="181" >
                     SLOVAKIA
                  </option>
                  <option value="182" >
                     SLOVENIA
                  </option>
                  <option value="183" >
                     SOLOMON ISLANDS
                  </option>
                  <option value="184" >
                     SOMALIA
                  </option>
                  <option value="185" >
                     SOUTH AFRICA
                  </option>
                  <option value="186" >
                     SPAIN
                  </option>
                  <option value="187" >
                     SRI LANKA
                  </option>
                  <option value="188" >
                     ST PIERRE &amp; MIQUELON
                  </option>
                  <option value="189" >
                     SUDAN
                  </option>
                  <option value="190" >
                     SURINAME
                  </option>
                  <option value="191" >
                     SWAZILAND
                  </option>
                  <option value="192" >
                     SWEDEN
                  </option>
                  <option value="193" >
                     SWITZERLAND
                  </option>
                  <option value="194" >
                     SYRIA
                  </option>
                  <option value="195" >
                     TAIWAN
                  </option>
                  <option value="196" >
                     TAJIKISTAN
                  </option>
                  <option value="197" >
                     TANZANIA
                  </option>
                  <option value="198" >
                     THAILAND
                  </option>
                  <option value="199" >
                     TOGO
                  </option>
                  <option value="200" >
                     TONGA
                  </option>
                  <option value="201" >
                     TRINIDAD &amp; TOBAGO
                  </option>
                  <option value="202" >
                     TUNISIA
                  </option>
                  <option value="203" >
                     TURKEY
                  </option>
                  <option value="204" >
                     TURKMENISTAN
                  </option>
                  <option value="205" >
                     TURKS &amp; CAICOS IS
                  </option>
                  <option value="206" >
                     TUVALU
                  </option>
                  <option value="207" >
                     UGANDA
                  </option>
                  <option value="4" >
                     UK
                  </option>
                  <option value="208" >
                     UKRAINE
                  </option>
                  <option value="209" >
                     UNITED ARAB EMIRATES
                  </option>
                  <option value="210" >
                     UNITED KINGDOM
                  </option>
                  <option value="211" >
                     UNITED STATES
                  </option>
                  <option value="212" >
                     URUGUAY
                  </option>
                  <option value="213" >
                     UZBEKISTAN
                  </option>
                  <option value="214" >
                     VANUATU
                  </option>
                  <option value="215" >
                     VENEZUELA
                  </option>
                  <option value="216" >
                     VIETNAM
                  </option>
                  <option value="217" >
                     VIRGIN ISLANDS
                  </option>
                  <option value="218" >
                     WALLIS AND FUTUNA
                  </option>
                  <option value="219" >
                     WEST BANK
                  </option>
                  <option value="220" >
                     WESTERN SAHARA
                  </option>
                  <option value="221" >
                     YEMEN
                  </option>
                  <option value="222" >
                     ZAMBIA
                  </option>
                  <option value="223" >
                     ZIMBABWE
                  </option>
               </select>
            </div>
            <div class="form-group">
               <label for="rstate">State/division</label>
               <input type="text" class="form-control" name="rstate" id="rstate">
            </div>
            <div class="form-group">
               <label for="rdist">District/Province</label>
               <input type="text" class="form-control" name="rdist" id="rdist">
            </div>
            <div class="form-group">
               <label for="rcity">City /Thana</label>
               <input type="text" class="form-control" name="rcity" id="rcity">
            </div>
         </div>

         <div>&nbsp;</div>

         <div class="box box-info">
            <div class="box-header with-border">
               <h3 class="box-title"><i class="fa fa-file"></i> <b> Order Details </b></h3>
            </div>           
            <div class="form-group">
               <label for="expected_date_to_receive">Expected Delivery Date</label>
               <input type="text" class="form-control" name="expected_date_to_receive" id="expected_date_to_receive">
            </div>
            <div class="form-group">
               <label for="delivery_condition">Delivery Type * </label>
               <select id="delivery_condition" name="delivery_condition" class="form-control">
                  <option value="0">---Select---</option>
                  <option value="1">Receive from Dhaka office</option>
                  <option value="2">Home Delivery in Dhaka City</option>
                  <option value="3">Delivery in District level</option>
                  <option value="4">Home Delivery in Europe</option>
               </select>
            </div>
            <div class="form-group">
               <label for="numberOfBox">Number of Box *</label>
               <input type="number" class="form-control" name="numberOfBox" id="numberOfBox">
            </div>
            <div class="form-group">
               <label for="goods_value">Goods Value (EURO) *</label>
               <input type="number" step="any" class="form-control" id="goods_value" name="goods_value" value="0" onchange="calculateCommission(this)">
            </div>
            <div class="form-group">
               <label for="productType">Product Type *</label>
               <select class="form-control" name="productType" id="productType" class="form-control" onchange="calculateCommission(this)">
                  <option value="0">---Select---</option>
                  <option value="1"> Documents </option>
                  <option value="2"> Goods </option>
               </select>
            </div>
            <div class="form-group">
               <label for="weight">Total Weight (Kg) *</label>
               <input class="form-control" step="any" type="number" name="weight" id="weight" value="0" onchange="calculateCommission(this)">
            </div>
            <div class="form-group">
               <label for="perKg">Charge/Kg (EURO)</label>
               <input class="form-control" type="number" step="any" readonly="true" name="perKg" id="perKg" value="0" style="font-weight: bold;">
            </div>
            <div class="form-group">
               <label for="cusCharge">Charge(EURO)</label>
               <input class="form-control" step="any" readonly="true" type="number" id="cusCharge" name="cusCharge" value="0">
            </div>
            <div class="form-group">
               <label for="homeDeliveryCharge">Home Delivery Charge</label>
               <input class="form-control" step="any" readonly="true" name="homeDeliveryCharge" id="homeDeliveryCharge" type="number" value="0">
            </div>
            <div class="form-group">
               <label for="addiCharge">Additional Charge</label>
               <input class="form-control" step="any" type="number" name="addiCharge" id="addiCharge" value="0" onchange="addAdditionalCharge(this)">
            </div>
            <div class="form-group">
               <label for="agent_comm">Total Charge (EURO)</label>
               <input class="form-control total" step="any" readonly="true" type="number" name="total" id="total" value="0">
               <input type="hidden" name="agent_comm" id="agent_comm" value="0">
            </div>
            <div class="form-group">
               <label for="delivery_way">Delivery Way * </label>
               <select id="delivery_way" name="delivery_way" class="form-control">
                  <option value="By Air">By Air</option>
                  <option value="By Sea">By Sea</option>
                  <option value="By Road">By Road</option>
                  <option value="Various">Various</option>
               </select>
            </div>
            <div class="form-group">
            <label for="departure_airport" class="col-sm-4 control-label">Departure Airport *</label>
            <select id="departure_airport" name="departure_airport" class="form-control select2" style="width: 100%;">
               <option value="0">---Select---</option>
               <option value="753">Afghanistan - Jalalabad    </option>
               <option value="834">Afghanistan - Kabul - Khwaja Rawash Airport</option>
               <option value="1869">Afghanistan - Uruzgan</option>
               <option value="1788">Albania - Tirana - Rinas</option>
               <option value="51">Algeria - Algiers, Houari Boumediene Airport</option>
               <option value="79">Algeria - Annaba</option>
               <option value="378">Algeria - Constantine</option>
               <option value="785">Algeria - Jijel</option>
               <option value="1334">Algeria - Oran (Ouahran)</option>
               <option value="1366">American Samoa - Pago Pago</option>
               <option value="74">Andorra - Andorra La Vella - Heliport</option>
               <option value="179">Angola - Benguela</option>
               <option value="272">Angola - Cabinda</option>
               <option value="758">Angola - Jamba</option>
               <option value="1042">Angola - Luanda - 4 de Fevereiro</option>
               <option value="1841">Angola - Uige</option>
               <option value="75">Anguilla - Anguilla</option>
               <option value="85">Antigua and Barbuda - Antigua, V.C. Bird International</option>
               <option value="258">Argentina - Buenos Aires</option>
               <option value="259">Argentina - Buenos Aires, Ezeiza International Airport</option>
               <option value="260">Argentina - Buenos Aires, Jorge Newbery</option>
               <option value="384">Argentina - Cordoba</option>
               <option value="697">Argentina - Iguazu, Cataratas</option>
               <option value="818">Argentina - Jose De San Martin</option>
               <option value="824">Argentina - Jujuy - El Cadillal Airport</option>
               <option value="830">Argentina - Junin</option>
               <option value="1095">Argentina - Mar del Plata</option>
               <option value="1138">Argentina - Mendoza</option>
               <option value="1539">Argentina - Rosario</option>
               <option value="1565">Argentina - Salta, Gen Belgrano</option>
               <option value="1576">Argentina - San Carlos de Bariloche</option>
               <option value="1603">Argentina - Santa Rosa</option>
               <option value="1870">Argentina - Ushuaia - Islas Malvinas Airport</option>
               <option value="490">Armenia - Eriwan (Yerevan, Jerevan)</option>
               <option value="97">Aruba - Aruba - Reina Beatrix International, Oranjestad</option>
               <option value="1338">Aruba - Oranjestad - Reina Beatrix International</option>
               <option value="17">Australia - Adelaide</option>
               <option value="35">Australia - Albany</option>
               <option value="41">Australia - Albury</option>
               <option value="54">Australia - Alice Springs</option>
               <option value="120">Australia - Ayers Rock - Connellan</option>
               <option value="121">Australia - Ayr</option>
               <option value="130">Australia - Ballina</option>
               <option value="132">Australia - Bamaga</option>
               <option value="207">Australia - Blackwater</option>
               <option value="231">Australia - Bowen</option>
               <option value="235">Australia - Brampton Island</option>
               <option value="246">Australia - Brisbane</option>
               <option value="249">Australia - Broken Hill</option>
               <option value="251">Australia - Broome</option>
               <option value="266">Australia - Bundaberg</option>
               <option value="270">Australia - Burnie (Wynyard)</option>
               <option value="274">Australia - Cairns</option>
               <option value="286">Australia - Canberra - Canberra Airport</option>
               <option value="294">Australia - Carnarvon</option>
               <option value="300">Australia - Casino</option>
               <option value="311">Australia - Ceduna</option>
               <option value="312">Australia - Cessnock</option>
               <option value="324">Australia - Charters Towers</option>
               <option value="356">Australia - Clermont</option>
               <option value="364">Australia - Coffs Harbour</option>
               <option value="368">Australia - Collinsville</option>
               <option value="380">Australia - Coober Pedy</option>
               <option value="381">Australia - Cooktown</option>
               <option value="382">Australia - Cooma</option>
               <option value="402">Australia - Dalby</option>
               <option value="411">Australia - Darwin</option>
               <option value="412">Australia - Daydream Island</option>
               <option value="423">Australia - Derby</option>
               <option value="430">Australia - Devonport</option>
               <option value="448">Australia - Dubbo</option>
               <option value="457">Australia - Dunk Island</option>
               <option value="462">Australia - Dysart</option>
               <option value="484">Australia - Emerald</option>
               <option value="485">Australia - Emerald</option>
               <option value="495">Australia - Esperance</option>
               <option value="561">Australia - Geelong</option>
               <option value="566">Australia - Geraldton</option>
               <option value="573">Australia - Gladstone</option>
               <option value="580">Australia - Gold Coast</option>
               <option value="581">Australia - Goondiwindi</option>
               <option value="585">Australia - Gove (Nhulunbuy)</option>
               <option value="597">Australia - Great Keppel Island</option>
               <option value="606">Australia - Griffith</option>
               <option value="608">Australia - Groote Eylandt - Alyangula</option>
               <option value="626">Australia - Gympie</option>
               <option value="635">Australia - Hamilton</option>
               <option value="638">Australia - Hamilton Island</option>
               <option value="655">Australia - Hayman Island</option>
               <option value="661">Australia - Hervey Bay</option>
               <option value="666">Australia - Hinchinbrook Island</option>
               <option value="669">Australia - Hobart</option>
               <option value="672">Australia - Home Hill</option>
               <option value="705">Australia - Ingham</option>
               <option value="706">Australia - Innisfail</option>
               <option value="767">Australia - Jandakot</option>
               <option value="825">Australia - Julia Creek</option>
               <option value="828">Australia - Jundah</option>
               <option value="841">Australia - Kalgoorlie</option>
               <option value="856">Australia - Karratha</option>
               <option value="858">Australia - Karumba</option>
               <option value="862">Australia - Katherine</option>
               <option value="890">Australia - King Island</option>
               <option value="892">Australia - Kingscote</option>
               <option value="925">Australia - Kowanyama</option>
               <option value="935">Australia - Kununurra</option>
               <option value="979">Australia - Launceston</option>
               <option value="981">Australia - Laverton</option>
               <option value="985">Australia - Learmouth (Exmouth)</option>
               <option value="988">Australia - Leinster</option>
               <option value="992">Australia - Leonora</option>
               <option value="1008">Australia - Lindeman Island</option>
               <option value="1012">Australia - Lismore</option>
               <option value="1015">Australia - Lizard Island</option>
               <option value="1017">Australia - Lockhart River</option>
               <option value="1030">Australia - Longreach</option>
               <option value="1064">Australia - Mackay</option>
               <option value="1073">Australia - Maitland</option>
               <option value="1115">Australia - Maryborough</option>
               <option value="1133">Australia - Meekatharra</option>
               <option value="1134">Australia - Melbourne - Melbourne Airport (Tullamarine)</option>
               <option value="1143">Australia - Merimbula</option>
               <option value="1156">Australia - Middlemount</option>
               <option value="1164">Australia - Mildura</option>
               <option value="1206">Australia - Moranbah</option>
               <option value="1207">Australia - Moree</option>
               <option value="1212">Australia - Moruya</option>
               <option value="1224">Australia - Mount Gambier</option>
               <option value="1225">Australia - Mount Magnet</option>
               <option value="1226">Australia - Mt. Isa</option>
               <option value="1260">Australia - Narrabri</option>
               <option value="1261">Australia - Narrandera</option>
               <option value="1285">Australia - Newcastle - Belmont</option>
               <option value="1286">Australia - Newcastle - Williamtown</option>
               <option value="1289">Australia - Newman</option>
               <option value="1302">Australia - Noosa</option>
               <option value="1303">Australia - Norfolk Island</option>
               <option value="1330">Australia - Olympic Dam</option>
               <option value="1335">Australia - Orange</option>
               <option value="1342">Australia - Orpheus Island</option>
               <option value="1380">Australia - Paraburdoo</option>
               <option value="1399">Australia - Perth International</option>
               <option value="1428">Australia - Port Augusta</option>
               <option value="1432">Australia - Port Hedland</option>
               <option value="1436">Australia - Port Lincoln</option>
               <option value="1437">Australia - Port Macquarie</option>
               <option value="1433">Australia - Portland</option>
               <option value="1457">Australia - Prosperpine</option>
               <option value="1475">Australia - Queenstown</option>
               <option value="1529">Australia - Rockhampton</option>
               <option value="1629">Australia - Scone</option>
               <option value="1653">Australia - Shute Harbour</option>
               <option value="1662">Australia - Singleton</option>
               <option value="1685">Australia - South Molle Island</option>
               <option value="1719">Australia - Streaky Bay</option>
               <option value="1726">Australia - Sunshine Coast</option>
               <option value="1731">Australia - Sydney - Sydney Airport</option>
               <option value="1749">Australia - Tamworth</option>
               <option value="1751">Australia - Taree</option>
               <option value="1763">Australia - Temora</option>
               <option value="1767">Australia - Tennant Creek</option>
               <option value="1784">Australia - Thursday Island</option>
               <option value="1797">Australia - Tom Price</option>
               <option value="1798">Australia - Toowoomba</option>
               <option value="1805">Australia - Townsville</option>
               <option value="1916">Australia - Wagga</option>
               <option value="1920">Australia - Warrnambool</option>
               <option value="1929">Australia - Weipa</option>
               <option value="1941">Australia - Whitsunday Resort</option>
               <option value="1942">Australia - Whyalla</option>
               <option value="1946">Australia - Wickham</option>
               <option value="1954">Australia - Wiluna</option>
               <option value="1960">Australia - Wollongong</option>
               <option value="1961">Australia - Woomera</option>
               <option value="1966">Australia - Wyndham</option>
               <option value="595">Austria - Graz</option>
               <option value="707">Austria - Innsbruck - Kranebitten</option>
               <option value="905">Austria - Klagenfurt</option>
               <option value="1009">Austria - Linz - Hoersching</option>
               <option value="1568">Austria - Salzburg - W.A. Mozart</option>
               <option value="1947">Austria - Wien (Vienna) - Vienna International</option>
               <option value="129">Azerbaijan - Baku - Heydar Aliyev International Airport</option>
               <option value="1251">Azerbaijan - Nakhichevan</option>
               <option value="346">Bahamas - Chub Cay</option>
               <option value="541">Bahamas - Freeport - Grand Bahama International Airport</option>
               <option value="586">Bahamas - Govenors Harbour</option>
               <option value="588">Bahamas - Grand Bahama International</option>
               <option value="1112">Bahamas - Marsh Harbour</option>
               <option value="1264">Bahamas - Nassau</option>
               <option value="1308">Bahamas - North Eleuthera</option>
               <option value="1526">Bahamas - Rock Sound</option>
               <option value="1587">Bahamas - San Salvador</option>
               <option value="1810">Bahamas - Treasure Cay</option>
               <option value="127">Bahrain - Bahrain - Bahrain International Airport</option>
               <option value="149">Bangladesh - Barisal</option>
               <option value="343">Bangladesh - Chittagong</option>
               <option value="432">Bangladesh - Dhaka - Zia International Airport</option>
               <option value="780">Bangladesh - Jessore - Jessore Airport</option>
               <option value="1732">Bangladesh - Sylhet</option>
               <option value="244">Barbados - Bridgetown - Grantley Adams International</option>
               <option value="1172">Belarus - Minsk, International</option>
               <option value="86">Belgium - Antwerp</option>
               <option value="253">Belgium - Brussels - Brussels Airport</option>
               <option value="568">Belgium - Ghent (Gent)</option>
               <option value="999">Belgium - Liege</option>
               <option value="173">Belize - Belize City - Philip S.W.Goldson International</option>
               <option value="390">Benin - Cotonou - Cotonou Cadjehoun Airport</option>
               <option value="189">Bermuda - Bermuda - L.F. Wade International Airport</option>
               <option value="1386">Bhutan - Paro</option>
               <option value="360">Bolivia - Cochabamba</option>
               <option value="970">Bolivia - La Paz - El Alto</option>
               <option value="1595">Bolivia - Santa Cruz de la Sierra</option>
               <option value="1601">Bolivia - Santa Rosa</option>
               <option value="1219">Bosnia and Herzegovina - Mostar</option>
               <option value="1621">Bosnia and Herzegovina - Sarajevo</option>
               <option value="536">Botswana - Francistown</option>
               <option value="552">Botswana - Gaborone - Sir Seretse Khama International Airport</option>
               <option value="832">Botswana - Jwaneng</option>
               <option value="1122">Botswana - Maun</option>
               <option value="1634">Botswana - Selibi Phikwe</option>
               <option value="91">Brazil - Aracaju</option>
               <option value="168">Brazil - Belem - Val de Cans International Airport</option>
               <option value="175">Brazil - Belo Horizonte - Tancredo Neves International Airport</option>
               <option value="214">Brazil - Boa Vista</option>
               <option value="236">Brazil - Brasilia - President Juscelino Kubitschek International</option>
               <option value="285">Brazil - Campo Grande</option>
               <option value="395">Brazil - Cuiaba - Marechal Rondon International Airport</option>
               <option value="398">Brazil - Curitiba - Afonso Pena International Airport</option>
               <option value="517">Brazil - Florianopolis</option>
               <option value="520">Brazil - Fortaleza - Pinto Martins Airport</option>
               <option value="579">Brazil - Goiania, Santa Genoveva Airport</option>
               <option value="744">Brazil - Jacobina   </option>
               <option value="756">Brazil - Jales</option>
               <option value="769">Brazil - Januaria</option>
               <option value="771">Brazil - Jatai</option>
               <option value="801">Brazil - Joacaba</option>
               <option value="802">Brazil - Joao Pessoa - Castro Pinto Airport</option>
               <option value="811">Brazil - Joinville - Cubatao Airport</option>
               <option value="823">Brazil - Juiz De Fora - Francisco De Assis Airport</option>
               <option value="1061">Brazil - Macapa - Alberto Alcolumbre International Airport</option>
               <option value="1063">Brazil - Maceio - Zumbi dos Palmares International Airport</option>
               <option value="1085">Brazil - Manaus - Eduardo Gomes International Airport</option>
               <option value="1194">Brazil - Montenegro</option>
               <option value="1265">Brazil - Natal - Augusto Severo International Airport</option>
               <option value="1370">Brazil - Palmas</option>
               <option value="1441">Brazil - Porto Alegre - Salgado Filho International Airport</option>
               <option value="1445">Brazil - Porto Velho</option>
               <option value="1497">Brazil - Recife - Guararapes-Gilberto Freyre International</option>
               <option value="1516">Brazil - Rio Branco - Plácido de Castro International Airport</option>
               <option value="1519">Brazil - Rio de Janeiro</option>
               <option value="1517">Brazil - Rio de Janeiro - Galeao</option>
               <option value="1518">Brazil - Rio de Janeiro - Santos Dumont</option>
               <option value="1567">Brazil - Salvador - Salvador International Airport</option>
               <option value="1602">Brazil - Santa Rosa</option>
               <option value="1612">Brazil - Sao Luis - Marechal Cunha Machado International</option>
               <option value="1613">Brazil - Sao Paulo</option>
               <option value="1614">Brazil - Sao Paulo - Congonhas</option>
               <option value="1615">Brazil - Sao Paulo - Guarulhos</option>
               <option value="614">Brazil - Sao Paulo - Guarulhos International</option>
               <option value="1616">Brazil - Sao Paulo - Viracopos</option>
               <option value="1769">Brazil - Teresina</option>
               <option value="1833">Brazil - Uberaba</option>
               <option value="1834">Brazil - Uberlandia - Eduardo Gomes Airport</option>
               <option value="1866">Brazil - Urubupunga - Ernesto Pochler Airport</option>
               <option value="1867">Brazil - Uruguaiana - Ruben Berta Airport</option>
               <option value="1912">Brazil - Vitoria - Eurico de Aguiar Salles Airport</option>
               <option value="1802">British Virgin Islands - Tortola</option>
               <option value="135">Brunei - Bandar Seri Begawan - Brunei International Airport</option>
               <option value="229">Bulgaria - Bourgas/Burgas</option>
               <option value="583">Bulgaria - Gorna</option>
               <option value="760">Bulgaria - Jambol</option>
               <option value="1546">Bulgaria - Ruse</option>
               <option value="1656">Bulgaria - Silistra</option>
               <option value="1680">Bulgaria - Sofia - Vrazhdebna</option>
               <option value="1752">Bulgaria - Targovishte</option>
               <option value="1892">Bulgaria - Varna</option>
               <option value="1903">Bulgaria - Vidin</option>
               <option value="215">Burkina Faso - Bobo/Dioulasso</option>
               <option value="1355">Burkina Faso - Ouagadougou</option>
               <option value="263">Burundi - Bujumbura - Bujumbura International Airport</option>
               <option value="1406">Cambodia - Phnom Penh - Pochentong</option>
               <option value="445">Cameroon - Douala</option>
               <option value="557">Cameroon - Garoua</option>
               <option value="1106">Cameroon - Maroua</option>
               <option value="1291">Cameroon - N&#039;Gaoundere</option>
               <option value="1976">Cameroon - Yaounde</option>
               <option value="112">Canada - Attawapiskat, NT</option>
               <option value="223">Canada - Bonaventure, PQ</option>
               <option value="278">Canada - Calgary - Calgary International Airport</option>
               <option value="282">Canada - Cambridge Bay</option>
               <option value="347">Canada - Churchill</option>
               <option value="416">Canada - Deer Lake/Corner Brook</option>
               <option value="468">Canada - Edmonton</option>
               <option value="469">Canada - Edmonton, International</option>
               <option value="470">Canada - Edmonton, Municipal</option>
               <option value="513">Canada - Flin Flon</option>
               <option value="519">Canada - Fort Albert</option>
               <option value="525">Canada - Fort McMurray</option>
               <option value="529">Canada - Fort Smith</option>
               <option value="531">Canada - Fort St. John</option>
               <option value="540">Canada - Fredericton</option>
               <option value="556">Canada - Gander</option>
               <option value="572">Canada - Gillam</option>
               <option value="582">Canada - Goose Bay</option>
               <option value="632">Canada - Halifax International</option>
               <option value="633">Canada - Hall Beach</option>
               <option value="636">Canada - Hamilton</option>
               <option value="647">Canada - Harrington Harbour, PQ</option>
               <option value="709">Canada - Inuvik</option>
               <option value="713">Canada - Iqaluit (Frobisher Bay)</option>
               <option value="845">Canada - Kamloops, BC</option>
               <option value="860">Canada - Kaschechawan, PQ</option>
               <option value="871">Canada - Kelowna, BC</option>
               <option value="938">Canada - Kuujjuaq (FortChimo)</option>
               <option value="939">Canada - Kuujjuarapik</option>
               <option value="954">Canada - La Grande</option>
               <option value="946">Canada - Lac Brochet, MB</option>
               <option value="984">Canada - Leaf Rapids</option>
               <option value="1019">Canada - London</option>
               <option value="1189">Canada - Moncton</option>
               <option value="1201">Canada - Montreal</option>
               <option value="1202">Canada - Montreal - Dorval (Montréal-Trudeau)</option>
               <option value="1203">Canada - Montreal - Mirabel</option>
               <option value="1254">Canada - Nanisivik</option>
               <option value="1305">Canada - Norman Wells</option>
               <option value="1351">Canada - Ottawa - Hull</option>
               <option value="1438">Canada - Port Menier, PQ</option>
               <option value="1454">Canada - Prince George</option>
               <option value="1455">Canada - Prince Rupert/Digby Island</option>
               <option value="1466">Canada - Pukatawagan</option>
               <option value="1474">Canada - Quebec - Quebec International</option>
               <option value="1485">Canada - Rainbow Lake, AB</option>
               <option value="1501">Canada - Regina</option>
               <option value="1505">Canada - Resolute Bay</option>
               <option value="1555">Canada - Saint John</option>
               <option value="1591">Canada - Sandspit</option>
               <option value="1624">Canada - Saskatoon</option>
               <option value="1640">Canada - Shamattawa, MB</option>
               <option value="1676">Canada - Smithers</option>
               <option value="1684">Canada - South Indian Lake, MB</option>
               <option value="1693">Canada - St. Augustin, PQ</option>
               <option value="1697">Canada - St. John&#039;s</option>
               <option value="1705">Canada - St. Pierre, NF</option>
               <option value="1771">Canada - Terrace</option>
               <option value="1775">Canada - The Pas</option>
               <option value="1781">Canada - Thompson</option>
               <option value="1783">Canada - Thunder Bay</option>
               <option value="1801">Canada - Toronto</option>
               <option value="1799">Canada - Toronto - Billy Bishop Toronto City Airport</option>
               <option value="1800">Canada - Toronto - Toronto Pearson International Airport</option>
               <option value="1852">Canada - Umiujaq</option>
               <option value="1861">Canada - Uranium City</option>
               <option value="1879">Canada - Val d&#039;Or</option>
               <option value="1888">Canada - Vancouver - Vancouver International</option>
               <option value="1901">Canada - Victoria</option>
               <option value="1914">Canada - Wabush</option>
               <option value="1937">Canada - Whale Cove, NT</option>
               <option value="1940">Canada - Whitehorse</option>
               <option value="1957">Canada - Windsor Ontario</option>
               <option value="1958">Canada - Winnipeg International</option>
               <option value="1977">Canada - Yellowknife</option>
               <option value="1450">Cape Verde - Praia - Nelson Mandela International Airport</option>
               <option value="1557">Cape Verde - Sal</option>
               <option value="590">Cayman Islands - Grand Cayman - Owen Roberts International</option>
               <option value="134">Central African Republic - Bambari</option>
               <option value="138">Central African Republic - Bangassou</option>
               <option value="142">Central African Republic - Bangui - M&#039;Poko International Airport</option>
               <option value="181">Central African Republic - Berberati</option>
               <option value="200">Central African Republic - Biraro</option>
               <option value="242">Central African Republic - Bria</option>
               <option value="295">Central African Republic - Carnot</option>
               <option value="1352">Central African Republic - Ouadda</option>
               <option value="4">Chad - Abeche</option>
               <option value="1222">Chad - Moundou</option>
               <option value="1269">Chad - N&#039;Djamena</option>
               <option value="42">Channel Islands - Alderney</option>
               <option value="617">Channel Islands - Guernsey</option>
               <option value="778">Channel Islands - Jersey</option>
               <option value="276">Chile - Calama - El Loa</option>
               <option value="465">Chile - Easter Island</option>
               <option value="1470">Chile - Punta Arenas - Presidente Carlos Ibáñez del Campo</option>
               <option value="1608">Chile - Santiago de Chile - Arturo Merino Benitez</option>
               <option value="1885">Chile - Valparaiso</option>
               <option value="164">China - Beijing</option>
               <option value="165">China - Beijing - Nanyuan Airport</option>
               <option value="1641">China - Shanghai - Hongqiao</option>
               <option value="1642">China - Shanghai - Pu Dong</option>
               <option value="1785">China - Tianjin</option>
               <option value="152">Colombia - Barranquilla</option>
               <option value="218">Colombia - Bogota - El Nuevo Dorado International Airport</option>
               <option value="254">Colombia - Bucaramanga</option>
               <option value="279">Colombia - Cali</option>
               <option value="303">Colombia - Cartagena - Rafael Núñez International Airport</option>
               <option value="1130">Colombia - Medellin - José María Córdova International</option>
               <option value="1397">Colombia - Pereira</option>
               <option value="1573">Colombia - San Andres</option>
               <option value="1605">Colombia - Santa Rosalia</option>
               <option value="76">Comoros (Comores) - Anjouan - Anjouan Airport</option>
               <option value="1211">Comoros (Comores) - Moroni - Prince Said Ibrahim</option>
               <option value="896">Congo (DRC) - Kinshasa - N&#039;Djili</option>
               <option value="902">Congo (DRC) - Kisangani</option>
               <option value="1010">Congo (DRC) - Lisala</option>
               <option value="1049">Congo (DRC) - Lumbumbashi</option>
               <option value="238">Congo (ROC) - Brazzaville - Maya-Maya Airport</option>
               <option value="1421">Congo (ROC) - Pointe Noire</option>
               <option value="1492">Cook Island - Rarotonga</option>
               <option value="1580">Costa Rica - San Jose</option>
               <option value="1857">Costa Rica - Upala</option>
               <option value="7">Cote d&#039;Ivoire - Abidjan</option>
               <option value="228">Cote d&#039;Ivoire - Bouake</option>
               <option value="406">Cote d&#039;Ivoire - Daloa</option>
               <option value="921">Cote d&#039;Ivoire - Korhogo</option>
               <option value="1083">Cote d&#039;Ivoire - Man</option>
               <option value="1585">Cote d&#039;Ivoire - San Pedro</option>
               <option value="1625">Cote d&#039;Ivoire - Sassandra</option>
               <option value="1973">Côte d&#039;Ivoire - Yamoussoukro</option>
               <option value="451">Croatia (Hrvatska) - Dubrovnik</option>
               <option value="1039">Croatia (Hrvatska) - Losinj - Losinj Arpt</option>
               <option value="1347">Croatia (Hrvatska) - Osijek</option>
               <option value="1467">Croatia (Hrvatska) - Pula</option>
               <option value="1514">Croatia (Hrvatska) - Rijeka</option>
               <option value="1687">Croatia (Hrvatska) - Split</option>
               <option value="1983">Croatia (Hrvatska) - Zadar</option>
               <option value="1984">Croatia (Hrvatska) - Zagreb - Zagreb Airport Pleso</option>
               <option value="348">Cuba - Cienfuegos - Jaime González Airport</option>
               <option value="653">Cuba - Havana - José Martí International</option>
               <option value="671">Cuba - Holguin</option>
               <option value="1607">Cuba - Santiago - Antonio Maceo Airport</option>
               <option value="1889">Cuba - Varadero</option>
               <option value="32">Cyprus - Akrotiri - RAF</option>
               <option value="975">Cyprus - Larnaca</option>
               <option value="1005">Cyprus - Limassol</option>
               <option value="1295">Cyprus - Nicosia</option>
               <option value="1379">Cyprus - Paphos</option>
               <option value="1449">Czech Republic - Prague - Václav Havel Airport (formerly Ruzyne)</option>
               <option value="1840">Czech Republic - Uherske Hradiste</option>
               <option value="2">Denmark - Aarhus</option>
               <option value="39">Denmark - Alborg</option>
               <option value="198">Denmark - Billund</option>
               <option value="383">Denmark - Copenhagen - Copenhagen Airport</option>
               <option value="493">Denmark - Esbjerg</option>
               <option value="507">Denmark - Faroer - Vágar Airport</option>
               <option value="859">Denmark - Karup</option>
               <option value="1321">Denmark - Odense</option>
               <option value="1534">Denmark - Roenne</option>
               <option value="1673">Denmark - Skrydstrup</option>
               <option value="1678">Denmark - Soenderborg</option>
               <option value="1780">Denmark - Thisted</option>
               <option value="438">Djibouti - Djibouti (city) - Djibouti-Ambouli International Airport</option>
               <option value="1136">Dominica - Melville Hall</option>
               <option value="299">Dominican Republic - Casa de Campo - La Romana International Airport</option>
               <option value="1464">Dominican Republic - Puerto Plata</option>
               <option value="1471">Dominican Republic - Punta Cana - Punta Cana International</option>
               <option value="473">Dominican Republic - Samana - Samaná El Catey International Airport</option>
               <option value="1611">Dominican Republic - Santo Domingo</option>
               <option value="616">Ecuador - Guayaquil - Simon Bolivar</option>
               <option value="797">Ecuador - Jipijapa</option>
               <option value="1481">Ecuador - Quito - Mariscal Sucre International Airport</option>
               <option value="1561">Ecuador - Salinas</option>
               <option value="11">Egypt - Abu Rudeis</option>
               <option value="12">Egypt - Abu Simbel</option>
               <option value="34">Egypt - Al Arish</option>
               <option value="46">Egypt - Alexandria - Borg el Arab Airport</option>
               <option value="47">Egypt - Alexandria - El Nhouza Airport</option>
               <option value="102">Egypt - Assiut</option>
               <option value="105">Egypt - Aswan - Daraw Airport</option>
               <option value="275">Egypt - Cairo - Cairo International Airport</option>
               <option value="480">Egypt - El Minya</option>
               <option value="688">Egypt - Hurghada International</option>
               <option value="879">Egypt - Kharga - New Valley</option>
               <option value="1054">Egypt - Luxor</option>
               <option value="1109">Egypt - Marsa Alam</option>
               <option value="1110">Egypt - Marsa Matrah (Marsa Matruh)</option>
               <option value="1279">Egypt - New Valley - Kharga</option>
               <option value="1443">Egypt - Port Said</option>
               <option value="1596">Egypt - Santa Katarina - Mount Sinai</option>
               <option value="1645">Egypt - Sharm El Sheikh</option>
               <option value="1668">Egypt - Siwa</option>
               <option value="1588">El Salvador - San Salvador</option>
               <option value="1076">Equatorial Guinea - Malabo - Malabo International Airport</option>
               <option value="100">Eritrea - Asmara - Asmara International</option>
               <option value="1744">Estonia - Tallinn - Pirita Harbour</option>
               <option value="1745">Estonia - Tallinn - Ulemiste</option>
               <option value="16">Ethiopia - Addis Ababa - Bole International Airport</option>
               <option value="786">Ethiopia - Jijiga</option>
               <option value="788">Ethiopia - Jimma</option>
               <option value="795">Ethiopia - Jinka - Baco/Jinka Airport</option>
               <option value="302">Fiji - Castaway</option>
               <option value="1246">Fiji - Nadi</option>
               <option value="1266">Fiji - Nausori</option>
               <option value="1729">Fiji - Suva - Nausori Airport (Luvuluvu)</option>
               <option value="486">Finland - Enontekioe</option>
               <option value="658">Finland - Helsinki - Vantaa</option>
               <option value="723">Finland - Ivalo</option>
               <option value="805">Finland - Joensuu</option>
               <option value="833">Finland - Jyväskylä (Jyvaskyla)</option>
               <option value="838">Finland - Kajaani</option>
               <option value="865">Finland - Kauhajoki</option>
               <option value="872">Finland - Kemi/Tornio</option>
               <option value="903">Finland - Kittilä</option>
               <option value="916">Finland - Kokkola/Pietarsaari</option>
               <option value="936">Finland - Kuopio</option>
               <option value="940">Finland - Kuusamo</option>
               <option value="972">Finland - Lappeenranta</option>
               <option value="1105">Finland - Mariehamn (Maarianhamina)</option>
               <option value="1159">Finland - Mikkeli</option>
               <option value="1357">Finland - Oulu</option>
               <option value="1425">Finland - Pori</option>
               <option value="1544">Finland - Rovaniemi</option>
               <option value="1627">Finland - Savonlinna</option>
               <option value="1633">Finland - Seinaejoki</option>
               <option value="1677">Finland - Sodankylae</option>
               <option value="1747">Finland - Tampere</option>
               <option value="1825">Finland - Turku</option>
               <option value="1876">Finland - Vaasa</option>
               <option value="1891">Finland - Varkaus</option>
               <option value="29">France - Ajaccio</option>
               <option value="38">France - Albi</option>
               <option value="81">France - Annecy</option>
               <option value="117">France - Aurillac</option>
               <option value="158">France - Bastia</option>
               <option value="184">France - Bergerac - Roumanieres</option>
               <option value="195">France - Biarritz</option>
               <option value="225">France - Bordeaux - Bordeaux Airport</option>
               <option value="241">France - Brest</option>
               <option value="281">France - Calvi</option>
               <option value="288">France - Cannes – Mandelieu Airport</option>
               <option value="314">France - Chambery</option>
               <option value="357">France - Clermont Ferrand</option>
               <option value="435">France - Dinard</option>
               <option value="436">France - Disneyland Paris</option>
               <option value="511">France - Figari</option>
               <option value="543">France - Frejus</option>
               <option value="605">France - Grenoble</option>
               <option value="950">France - La Rochelle</option>
               <option value="967">France - Lannion</option>
               <option value="1002">France - Lille - Lille Airport</option>
               <option value="1006">France - Limoges</option>
               <option value="1034">France - Lorient</option>
               <option value="1040">France - Lourdes/Tarbes</option>
               <option value="1058">France - Lyon - Lyon-Saint Exupéry Airport </option>
               <option value="1111">France - Marseille - Marseille Provence Airport</option>
               <option value="1146">France - Metz -  Frescaty</option>
               <option value="1147">France - Metz/Nancy Metz-Nancy-Lorraine</option>
               <option value="1200">France - Montpellier - Montpellier–Méditerranée Airport</option>
               <option value="1230">France - Mulhouse</option>
               <option value="1253">France - Nancy</option>
               <option value="1256">France - Nantes - Nantes Atlantique Airport</option>
               <option value="1294">France - Nice - Cote D&#039;Azur Airport</option>
               <option value="1298">France - Nimes</option>
               <option value="1382">France - Paris</option>
               <option value="1383">France - Paris - Charles de Gaulle</option>
               <option value="1384">France - Paris - Le Bourget</option>
               <option value="1385">France - Paris - Orly</option>
               <option value="1391">France - Pau</option>
               <option value="1398">France - Perpignan</option>
               <option value="1422">France - Poitiers - Biard</option>
               <option value="1479">France - Quimper</option>
               <option value="1503">France - Rennes</option>
               <option value="1521">France - Roanne</option>
               <option value="1532">France - Rodez</option>
               <option value="1553">France - Saint Brieuc</option>
               <option value="1695">France - St. Etienne</option>
               <option value="1718">France - Strasbourg - Strasbourg Airport</option>
               <option value="1804">France - Toulouse - Blagnac Airport</option>
               <option value="306">French Guiana - Cayenne - Cayenne-Rochambeau Airport</option>
               <option value="224">French Polynesia - Bora Bora</option>
               <option value="682">French Polynesia - Huahine</option>
               <option value="1090">French Polynesia - Manihi</option>
               <option value="1123">French Polynesia - Maupiti</option>
               <option value="1205">French Polynesia - Moorea</option>
               <option value="1484">French Polynesia - Raiatea</option>
               <option value="1489">French Polynesia - Rangiroa</option>
               <option value="1830">French Polynesia - Ua Huka</option>
               <option value="1831">French Polynesia - Ua Pou</option>
               <option value="1378">French Polynesia (Tahiti) - Papeete - Faaa</option>
               <option value="960">Gabon - Lambarene</option>
               <option value="997">Gabon - Libreville</option>
               <option value="1180">Gabon - Moanda</option>
               <option value="1221">Gabon - Mouila</option>
               <option value="1239">Gabon - Mvengue</option>
               <option value="1430">Gabon - Port Gentil</option>
               <option value="1362">Gabon/Loyautte - Oyem</option>
               <option value="143">Gambia - Banjul - Banjul International Airport (Yundum International)</option>
               <option value="1755">Georgia - Tbilisi - Novo Alexeyevka</option>
               <option value="114">Germany - Augsburg - Augsbur gAirport</option>
               <option value="160">Germany - Bayreuth - Bindlacher-Berg</option>
               <option value="185">Germany - Berlin</option>
               <option value="186">Germany - Berlin, Schoenefeld</option>
               <option value="187">Germany - Berlin, Tegel</option>
               <option value="188">Germany - Berlin, Tempelhof (ceased operating in 2008)</option>
               <option value="239">Germany - Bremen - Bremen Airport (Flughafen Bremen)</option>
               <option value="369">Germany - Cologne - Cologne Airport (Flughafen Köln/Bonn)</option>
               <option value="307">Germany - Cottbus - Cottbus-Drewitz Airport</option>
               <option value="443">Germany - Dortmund</option>
               <option value="446">Germany - Dresden - Dresden Airport</option>
               <option value="453">Germany - Duesseldorf - Düsseldorf International Airport</option>
               <option value="488">Germany - Erfurt - Erfurt Airport (Flughafen Erfurt)</option>
               <option value="538">Germany - Frankfurt/Hahn</option>
               <option value="537">Germany - Frankfurt/Main - Frankfurt Airport (Rhein-Main-Flughafen)</option>
               <option value="545">Germany - Friedrichshafen - Bodensee-Airport Friedrichshafen</option>
               <option value="618">Germany - Guettin</option>
               <option value="634">Germany - Hamburg - Fuhlsbuettel</option>
               <option value="642">Germany - Hannover</option>
               <option value="670">Germany - Hof</option>
               <option value="822">Germany - Juist (island)</option>
               <option value="853">Germany - Karlsruhe-Baden - Soellingen</option>
               <option value="883">Germany - Kiel - Holtenau</option>
               <option value="913">Germany - Köln, Köln/Bonn</option>
               <option value="989">Germany - Leipzig</option>
               <option value="1228">Germany - Muenchen (Munich) - Franz Josef Strauss</option>
               <option value="1229">Germany - Muenster/Osnabrueck</option>
               <option value="1316">Germany - Nürnberg (Nuremberg)</option>
               <option value="1363">Germany - Paderborn/Lippstadt</option>
               <option value="1547">Germany - Saarbruecken</option>
               <option value="1720">Germany - Stuttgart - Echterdingen</option>
               <option value="1935">Germany - Westerland, Sylt Airport</option>
               <option value="1948">Germany - Wiesbaden, Air Base</option>
               <option value="14">Ghana - Accra - Kotoka International Airport</option>
               <option value="569">Gibraltar - Gibraltar</option>
               <option value="94">Greece - Araxos</option>
               <option value="106">Greece - Athens - Elefthérios Venizélos International Airport</option>
               <option value="107">Greece - Athens, Hellinikon Airport</option>
               <option value="318">Greece - Chania</option>
               <option value="337">Greece - Chios</option>
               <option value="387">Greece - Corfu</option>
               <option value="659">Greece - Heraklion</option>
               <option value="839">Greece - Kalamata</option>
               <option value="855">Greece - Karpathos</option>
               <option value="867">Greece - Kavalla</option>
               <option value="922">Greece - Kos</option>
               <option value="1240">Greece - Mykonos</option>
               <option value="1244">Greece - Mytilene (Lesbos)</option>
               <option value="1268">Greece - Naxos - Naxos Airport</option>
               <option value="1453">Greece - Preveza/Lefkas</option>
               <option value="1510">Greece - Rhodos</option>
               <option value="1564">Greece - Saloniki</option>
               <option value="1571">Greece - Samos</option>
               <option value="1671">Greece - Skiathos</option>
               <option value="1776">Greece - Thessaloniki - Makedonia Apt.</option>
               <option value="1778">Greece - Thira</option>
               <option value="1985">Greece - Zakynthos</option>
               <option value="1262">Greenland - Narsarsuaq</option>
               <option value="1679">Greenland - Soendre Stroemfjord</option>
               <option value="1858">Greenland - Upernavik - Upernavik Heliport</option>
               <option value="1874">Greenland - Uummannaq</option>
               <option value="604">Grenada - Grenada - Point Salines Airport also Maurice Bishop</option>
               <option value="156">Guadeloupe - Basse-Terre - Pointe-à-Pitre International Airport</option>
               <option value="1420">Guadeloupe - Pointe a Pitre</option>
               <option value="23">Guam - Agana (Hagåtña)</option>
               <option value="612">Guam - Guam</option>
               <option value="628">Guam - Hagåtña - Guam International Airport</option>
               <option value="615">Guatemala - Guatemala City - La Aurora International Airport</option>
               <option value="375">Guinea - Conakry - Conakry International Airport</option>
               <option value="943">Guinea - Labe</option>
               <option value="205">Guinea-Bissau - Bissau - Osvaldo Vieiro International Airport</option>
               <option value="565">Guyana - Georgetown - Cheddi Jagan International Airport</option>
               <option value="742">Haiti - Jacmel   </option>
               <option value="776">Haiti - Jeremie - Jeremie Airport</option>
               <option value="1427">Haiti - Port au Prince</option>
               <option value="831">Honduras - Juticalpa</option>
               <option value="1523">Honduras - Roatan</option>
               <option value="1586">Honduras - San Pedro Sula</option>
               <option value="1604">Honduras - Santa Rosa, Copan</option>
               <option value="1758">Honduras - Tegucigalpa</option>
               <option value="1873">Honduras - Utila</option>
               <option value="675">Hong Kong - Hong Kong - Chek Lap Kok</option>
               <option value="674">Hong Kong - Hong Kong - International Airport (HKIA)</option>
               <option value="257">Hungary - Budapest - Budapest Ferihegy International Airport</option>
               <option value="471">Iceland - Egilsstadir</option>
               <option value="1508">Iceland - Reykjavik - Keflavik International</option>
               <option value="1507">Iceland - Reykjavik - Metropolitan Area</option>
               <option value="27">India - Ahmedabad</option>
               <option value="69">India - Amritsar</option>
               <option value="71">India - Anand</option>
               <option value="124">India - Bagdogra</option>
               <option value="137">India - Bangalore</option>
               <option value="150">India - Baroda</option>
               <option value="171">India - Belgaum</option>
               <option value="193">India - Bhopal</option>
               <option value="194">India - Bhubaneswar</option>
               <option value="221">India - Bombay (Mumbai) - Chhatrapati Shivaji International</option>
               <option value="277">India - Calcutta (Kolkata) - Netaji Subhas Chandra</option>
               <option value="280">India - Calicut</option>
               <option value="316">India - Chandigarh - Chandigarh International Airport</option>
               <option value="327">India - Chennai (Madras)</option>
               <option value="361">India - Cochin</option>
               <option value="365">India - Coimbatore</option>
               <option value="417">India - Delhi - Indira Gandhi International Airport</option>
               <option value="578">India - Goa</option>
               <option value="623">India - Guwahati</option>
               <option value="693">India - Hyderabad - Rajiv Gandhi International Airport</option>
               <option value="747">India - Jagdalpur</option>
               <option value="748">India - Jaipur - Sanganeer</option>
               <option value="749">India - Jaisalmer   </option>
               <option value="754">India - Jalandhar</option>
               <option value="763">India - Jammu - Satwari</option>
               <option value="764">India - Jamnagar - Govardhanpur</option>
               <option value="765">India - Jamshedpur - Sonari Airport</option>
               <option value="781">India - Jeypore - Jeypore Airport</option>
               <option value="803">India - Jodhpur</option>
               <option value="816">India - Jorhat - Rowriah Airport</option>
               <option value="848">India - Kanpur</option>
               <option value="917">India - Kolkata (Calcutta) - Netaji Subhas Chandra</option>
               <option value="1044">India - Lucknow</option>
               <option value="1069">India - Madras (Chennai) - Chennai International Airport</option>
               <option value="1243">India - Mysore</option>
               <option value="1249">India - Nagpur</option>
               <option value="1389">India - Patna</option>
               <option value="1469">India - Pune</option>
               <option value="1486">India - Rajkot</option>
               <option value="1488">India - Ranchi</option>
               <option value="1692">India - Srinagar</option>
               <option value="1728">India - Surat</option>
               <option value="1779">India - Thiruvananthapuram</option>
               <option value="1789">India - Tiruchirapally</option>
               <option value="1836">India - Udaipur - Dabok Airport</option>
               <option value="1890">India - Varanasi</option>
               <option value="119">Indonesia - Ayawasi</option>
               <option value="136">Indonesia - Bandung - Husein Sastranegara International Airport</option>
               <option value="420">Indonesia - Denpasar/Bali</option>
               <option value="750">Indonesia - Jakarta - Halim Perdana Kusuma</option>
               <option value="751">Indonesia - Jakarta - Metropolitan Area</option>
               <option value="752">Indonesia - Jakarta - Soekarno-Hatta International</option>
               <option value="759">Indonesia  - Jambi - Sultan Taha Syarifudn</option>
               <option value="773">Indonesia - Jayapura - Sentani</option>
               <option value="1139">Indonesia - Manado</option>
               <option value="1129">Indonesia - Medan - Kualanamu International</option>
               <option value="1128">Indonesia - Medan - Polania Int&#039;l (now Soewondo AFB)</option>
               <option value="1727">Indonesia - Surabaya - Juanda</option>
               <option value="1787">Indonesia - Tioman</option>
               <option value="1842">Indonesia - Ujung Pandang - Hasanudin Airport</option>
               <option value="3">Iran - Abadan</option>
               <option value="1759">Iran - Tehran (Teheran) - Mehrabad</option>
               <option value="1864">Iran - Urmiehm (Orumieh)</option>
               <option value="123">Iraq - Bagdad - Baghdad International Airport</option>
               <option value="155">Iraq - Basra, Basrah</option>
               <option value="899">Iraq - Kirkuk</option>
               <option value="1220">Iraq - Mosul</option>
               <option value="388">Ireland - Cork</option>
               <option value="442">Ireland - Donegal (Carrickfin)</option>
               <option value="449">Ireland - Dublin - Dublin International Airport</option>
               <option value="555">Ireland - Galway</option>
               <option value="875">Ireland - Kerry County</option>
               <option value="909">Ireland - Knock</option>
               <option value="1643">Ireland - Shannon (Limerick)</option>
               <option value="1675">Ireland - Sligo</option>
               <option value="475">Israel - Elat</option>
               <option value="476">Israel - Elat, Ovula</option>
               <option value="629">Israel - Haifa</option>
               <option value="779">Israel - Jerusalem - Atarot Airport (closed)</option>
               <option value="1761">Israel - Tel Aviv - Ben Gurion International</option>
               <option value="50">Italy - Alghero Sassari</option>
               <option value="73">Italy - Ancona - Ancona Falconara Airport</option>
               <option value="148">Italy - Bari</option>
               <option value="182">Italy - Bergamo/Milan - Orio Al Serio</option>
               <option value="220">Italy - Bologna</option>
               <option value="240">Italy - Brescia, Montichiari</option>
               <option value="245">Italy - Brindisi</option>
               <option value="273">Italy - Cagliari</option>
               <option value="305">Italy - Catania</option>
               <option value="474">Italy - Elba Island, Marina Di Campo</option>
               <option value="515">Italy - Florence (Firenze) - Peretola Airport</option>
               <option value="563">Italy - Genoa</option>
               <option value="961">Italy - Lamezia Terme</option>
               <option value="962">Italy - Lampedusa</option>
               <option value="1160">Italy - Milan</option>
               <option value="1161">Italy - Milan - Linate</option>
               <option value="1162">Italy - Milan - Malpensa</option>
               <option value="1163">Italy - Milan - Orio Al Serio</option>
               <option value="1258">Italy - Naples - Naples Capodichino Airport</option>
               <option value="1329">Italy - Olbia</option>
               <option value="1368">Italy - Palermo - Punta Raisi</option>
               <option value="1377">Italy - Pantelleria</option>
               <option value="1400">Italy - Perugia</option>
               <option value="1401">Italy - Pescara</option>
               <option value="1413">Italy - Pisa - Galileo Galilei</option>
               <option value="1500">Italy - Reggio Calabria</option>
               <option value="1515">Italy - Rimini</option>
               <option value="1535">Italy - Rome</option>
               <option value="1536">Italy - Rome - Ciampino</option>
               <option value="1537">Italy - Rome - Fuimicino</option>
               <option value="1808">Italy - Trapani</option>
               <option value="1812">Italy - Treviso</option>
               <option value="1814">Italy - Trieste</option>
               <option value="1824">Italy - Turin</option>
               <option value="1895">Italy - Venice - Marco Polo</option>
               <option value="1900">Italy - Verona</option>
               <option value="1899">Italy - Verona (Brescia) Montichiari</option>
               <option value="893">Jamaica - Kingston - Norman Manley</option>
               <option value="1193">Jamaica - Montego Bay - Sangster International</option>
               <option value="30">Japan - Akita</option>
               <option value="64">Japan - Amami</option>
               <option value="87">Japan - Aomori</option>
               <option value="330">Japan - Chiba City</option>
               <option value="548">Japan - Fukuoka</option>
               <option value="549">Japan - Fukushima - Fukushima Airport</option>
               <option value="627">Japan - Hachijo Jima</option>
               <option value="631">Japan - Hakodate</option>
               <option value="667">Japan - Hiroshima International</option>
               <option value="716">Japan - Ishigaki - New Ishigaki Airport</option>
               <option value="835">Japan - Kagoshima</option>
               <option value="911">Japan - Kobe</option>
               <option value="912">Japan - Kochi</option>
               <option value="918">Japan - Komatsu</option>
               <option value="934">Japan - Kumamoto</option>
               <option value="937">Japan - Kushiro</option>
               <option value="942">Japan - Kyoto</option>
               <option value="1119">Japan - Matsumoto, Nagano</option>
               <option value="1120">Japan - Matsuyama</option>
               <option value="1177">Japan - Miyako Jima (Ryuku Islands) - Hirara</option>
               <option value="1178">Japan - Miyazaki</option>
               <option value="1210">Japan - Morioka, Hanamaki</option>
               <option value="1247">Japan - Nagasaki</option>
               <option value="1248">Japan - Nagoya - Komaki AFB</option>
               <option value="1297">Japan - Niigata</option>
               <option value="1325">Japan - Oita</option>
               <option value="1326">Japan - Okayama</option>
               <option value="1327">Japan - Okinawa, Ryukyo Island - Naha</option>
               <option value="1344">Japan - Osaka - Itami</option>
               <option value="1345">Japan - Osaka - Kansai International Airport</option>
               <option value="1343">Japan - Osaka, Metropolitan Area</option>
               <option value="1549">Japan - Sado Shima</option>
               <option value="1618">Japan - Sapporo</option>
               <option value="341">Japan - Sapporo - New Chitose Airport</option>
               <option value="1620">Japan - Sapporo - New Chitose Airport</option>
               <option value="1619">Japan - Sapporo - Okadama</option>
               <option value="1635">Japan - Sendai</option>
               <option value="1741">Japan - Takamatsu</option>
               <option value="1792">Japan - Tokushima</option>
               <option value="1793">Japan - Tokyo</option>
               <option value="1794">Japan - Tokyo - Haneda</option>
               <option value="1795">Japan - Tokyo - Narita</option>
               <option value="1806">Japan - Toyama</option>
               <option value="1832">Japan - Ube</option>
               <option value="1972">Japan - Yamagata, Junmachi</option>
               <option value="1980">Japan - Yokohama</option>
               <option value="68">Jordan - Amman - Amman-Marka International Airport</option>
               <option value="67">Jordan - Amman - Queen Alia International Airport</option>
               <option value="90">Jordan - Aqaba</option>
               <option value="57">Kazakhstan - Almaty (Alma Ata) - Almaty International Airport</option>
               <option value="103">Kazakhstan - Astana - Astana International Airport</option>
               <option value="1080">Kenya - Malindi</option>
               <option value="1187">Kenya - Mombasa - Moi International</option>
               <option value="1250">Kenya - Nairobi</option>
               <option value="897">Kiribati - Kiritimati (island) - Cassidy International Airport</option>
               <option value="703">Korea South - Incheon, Incheon International Airport</option>
               <option value="941">Kuwait - Kuwait - Kuwait International</option>
               <option value="203">Kyrgyzstan - Bishkek - Manas International Airport</option>
               <option value="1513">Latvia - Riga</option>
               <option value="167">Lebanon - Beirut - Beirut Rafic Hariri International Airport</option>
               <option value="1116">Lesotho - Maseru - Moshoeshoe International</option>
               <option value="1191">Liberia - Monrovia - Metropolitan Area</option>
               <option value="1192">Liberia - Monrovia - Roberts International</option>
               <option value="178">Libya - Benghazi (Bengasi)</option>
               <option value="1632">Libya - Sehba</option>
               <option value="1815">Libya - Tripoli - Tripoli International</option>
               <option value="1907">Lithuania - Vilnius</option>
               <option value="1953">Lithuania - Wilna (Vilnius)</option>
               <option value="1052">Luxembourg - Luxembourg</option>
               <option value="1324">Macedonia - Ohrid</option>
               <option value="1672">Macedonia - Skopje</option>
               <option value="84">Madagascar - Antananarivo (Tanannarive) - Ivato International Airport</option>
               <option value="1074">Madagascar - Majunga</option>
               <option value="208">Malawi - Blantyre (Mandala) - Chileka International Airport</option>
               <option value="1003">Malawi - Lilongwe - Lilongwe International</option>
               <option value="199">Malaysia - Bintulu</option>
               <option value="810">Malaysia - Johor Bahru - Sultan Ismail International</option>
               <option value="923">Malaysia - Kota Kinabalu</option>
               <option value="930">Malaysia - Kuala Lumpur - International Airport</option>
               <option value="931">Malaysia - Kuala Lumpur - Sultan Abdul Aziz Shah</option>
               <option value="932">Malaysia - Kuantan</option>
               <option value="933">Malaysia - Kuching</option>
               <option value="945">Malaysia - Labuan</option>
               <option value="966">Malaysia - Langkawi (islands)</option>
               <option value="1173">Malaysia - Miri</option>
               <option value="1393">Malaysia - Penang International</option>
               <option value="1654">Malaysia - Sibu</option>
               <option value="1754">Malaysia - Tawau</option>
               <option value="133">Mali - Bamako - Bamako-Sénou International Airport</option>
               <option value="1046">Malta - Luga</option>
               <option value="757">Marshall Islands - Jaluit Island  </option>
               <option value="521">Martinique - Fort de France - Martinique Aimé Césaire International</option>
               <option value="1311">Mauritania - Nouadhibou</option>
               <option value="1312">Mauritania - Nouakchott</option>
               <option value="1989">Mauritania - Zouerate</option>
               <option value="1124">Mauritius - Mauritius - S.Seewoosagur Ram International</option>
               <option value="1533">Mauritius - Rodrigues Island</option>
               <option value="463">Mayotte - Dzaoudzi</option>
               <option value="13">Mexico - Acapulco</option>
               <option value="26">Mexico - Aguascaliente</option>
               <option value="287">Mexico - Cancun</option>
               <option value="334">Mexico - Chichen Itza</option>
               <option value="336">Mexico - Chihuahua - Gen Fierro Villalobos</option>
               <option value="350">Mexico - Ciudad Del Carmen</option>
               <option value="352">Mexico - Ciudad Juarez</option>
               <option value="353">Mexico - Ciudad Obregon</option>
               <option value="354">Mexico - Ciudad Victoria</option>
               <option value="366">Mexico - Colima</option>
               <option value="392">Mexico - Cozmel</option>
               <option value="396">Mexico - Culiacan</option>
               <option value="610">Mexico - Guadalajara</option>
               <option value="660">Mexico - Hermosillo - Gen. Pesqueira Garcia</option>
               <option value="683">Mexico - Huatulco</option>
               <option value="724">Mexico - Ixtapa/Zihuatenejo</option>
               <option value="755">Mexico - Jalapa</option>
               <option value="971">Mexico - La Paz - Leon</option>
               <option value="983">Mexico - Lazaro Cardenas</option>
               <option value="991">Mexico - Leon</option>
               <option value="1033">Mexico - Loreto</option>
               <option value="1036">Mexico - Los Cabos</option>
               <option value="1037">Mexico - Los Mochis</option>
               <option value="1092">Mexico - Manzanillo</option>
               <option value="1126">Mexico - Mazatlan</option>
               <option value="1141">Mexico - Merida</option>
               <option value="1148">Mexico - Mexicali</option>
               <option value="1150">Mexico - Mexico City - Atizapan</option>
               <option value="1151">Mexico - Mexico City - Juarez International</option>
               <option value="1149">Mexico - Mexico City - Mexico City International Airport</option>
               <option value="1152">Mexico - Mexico City - Santa Lucia</option>
               <option value="1168">Mexico - Minatitlan</option>
               <option value="1197">Mexico - Monterrey - Aeropuerto Del Norte</option>
               <option value="1196">Mexico - Monterrey - Gen. Mariano Escobedo</option>
               <option value="1208">Mexico - Morelia</option>
               <option value="1317">Mexico - Nuevo Laredo</option>
               <option value="1320">Mexico - Oaxaca - Xoxocotlan</option>
               <option value="1460">Mexico - Puebla</option>
               <option value="1462">Mexico - Puerto Escondido</option>
               <option value="1465">Mexico - Puerto Vallarta</option>
               <option value="1579">Mexico - San Jose Cabo</option>
               <option value="1584">Mexico - San Luis Potosi</option>
               <option value="1606">Mexico - Santa Rosalia</option>
               <option value="1748">Mexico - Tampico - Gen. F. Javier Mina</option>
               <option value="1786">Mexico - Tijuana - Rodriguez</option>
               <option value="1827">Mexico - Tuxtla Gutierrez</option>
               <option value="1865">Mexico - Uruapan</option>
               <option value="1896">Mexico - Veracruz</option>
               <option value="1906">Mexico - Villahermosa</option>
               <option value="1982">Mexico - Zacatecas</option>
               <option value="339">Moldova - Chisinau - Chişinău International Airport</option>
               <option value="1845">Mongolia - Ulaanbaatar - Buyant Uhaa Airport</option>
               <option value="22">Morocco - Agadir</option>
               <option value="52">Morocco - Al Hoceima</option>
               <option value="297">Morocco - Casablanca</option>
               <option value="298">Morocco - Casablanca, Mohamed V</option>
               <option value="510">Morocco - Fes</option>
               <option value="1108">Morocco - Marrakesh - Menara Airport</option>
               <option value="1353">Morocco - Ouarzazate</option>
               <option value="1356">Morocco - Oujda</option>
               <option value="1482">Morocco - Rabat - Rabat-Salé Airport</option>
               <option value="1750">Morocco - Tangier - Boukhalef</option>
               <option value="166">Mozambique - Beira</option>
               <option value="1094">Mozambique - Maputo - Maputo International</option>
               <option value="1088">Myanmar - Mandalay - Mandalay-Annisaton Airport</option>
               <option value="1490">Myanmar - Rangoon (Yangon) - Mingaladon</option>
               <option value="1975">Myanmar - Yangon (Rangoon) - Mingaladon</option>
               <option value="864">Namibia - Katima Mulilo/Mpacha</option>
               <option value="870">Namibia - Keetmanshoop</option>
               <option value="1045">Namibia - Luederitz</option>
               <option value="1185">Namibia - Mokuti</option>
               <option value="1332">Namibia - Ondangwa</option>
               <option value="1337">Namibia - Oranjemund</option>
               <option value="1545">Namibia - Rundu</option>
               <option value="1730">Namibia - Swakopmund</option>
               <option value="1818">Namibia - Tsumeb</option>
               <option value="1955">Namibia - Windhoek - Eros</option>
               <option value="1956">Namibia - Windhoek - Hosea Kutako International</option>
               <option value="766">Nepal - Janakpur</option>
               <option value="798">Nepal - Jiri</option>
               <option value="813">Nepal - Jomsom</option>
               <option value="827">Nepal - Jumla</option>
               <option value="863">Nepal - Kathmandu - Tribhuvan International Airport</option>
               <option value="70">Netherlands - Amsterdam - Amsterdam Airport Schiphol</option>
               <option value="418">Netherlands - Den Haag (The Hague)</option>
               <option value="472">Netherlands - Eindhoven</option>
               <option value="607">Netherlands - Groningen - Eelde</option>
               <option value="990">Netherlands - Lelystad</option>
               <option value="1060">Netherlands - Maastricht/Aachen</option>
               <option value="1543">Netherlands - Rotterdam</option>
               <option value="1837">Netherlands - Uden - Volkel Airport</option>
               <option value="222">Netherlands Antilles - Bonaire</option>
               <option value="397">Netherlands Antilles - Curacao - Curaçao International Airport</option>
               <option value="1702">Netherlands Antilles - St. Marteen</option>
               <option value="698">New Caledonia - Ile des Pins</option>
               <option value="699">New Caledonia - Ile Ouen</option>
               <option value="1101">New Caledonia - Mare</option>
               <option value="1313">New Caledonia - Noumea</option>
               <option value="1803">New Caledonia - Touho</option>
               <option value="113">New Zealand - Auckland - Auckland International Airport</option>
               <option value="209">New Zealand - Blenheim</option>
               <option value="345">New Zealand - Christchurch</option>
               <option value="456">New Zealand - Dunedin</option>
               <option value="637">New Zealand - Hamilton</option>
               <option value="702">New Zealand - Incercargill</option>
               <option value="710">New Zealand - Invercargill</option>
               <option value="1166">New Zealand - Milford Sound</option>
               <option value="1223">New Zealand - Mount Cook</option>
               <option value="1271">New Zealand - Nelson</option>
               <option value="1372">New Zealand - Palmerston North</option>
               <option value="1476">New Zealand - Queenstown</option>
               <option value="1542">New Zealand - Rotorua</option>
               <option value="1756">New Zealand - Te Anau</option>
               <option value="1931">New Zealand - Wellington</option>
               <option value="1936">New Zealand - Whakatane</option>
               <option value="1938">New Zealand - Whangarei</option>
               <option value="1084">Nicaragua - Managua - Augusto C Sandino</option>
               <option value="21">Niger - Agades</option>
               <option value="95">Niger - Arlit</option>
               <option value="1097">Niger - Maradi</option>
               <option value="1293">Niger - Niamey</option>
               <option value="1988">Niger - Zinder</option>
               <option value="10">Nigeria - Abuja - Nnamdi Azikiwe International Airport</option>
               <option value="817">Nigeria - Jos</option>
               <option value="847">Nigeria - Kano</option>
               <option value="953">Nigeria - Lagos - Murtala Muhammed Airport</option>
               <option value="1431">Nigeria - Port Harcourt</option>
               <option value="1473">North Korea - Pyongyang - Sunan International Airport</option>
               <option value="1556">Northern Mariana Islands - Saipan</option>
               <option value="44">Norway - Alesund</option>
               <option value="59">Norway - Alta</option>
               <option value="147">Norway - Bardufoss</option>
               <option value="183">Norway - Bergen</option>
               <option value="216">Norway - Bodo</option>
               <option value="248">Norway - Broennoeysund</option>
               <option value="499">Norway - Evenes</option>
               <option value="518">Norway - Floro</option>
               <option value="639">Norway - Hammerfest</option>
               <option value="652">Norway - Haugesund</option>
               <option value="898">Norway - Kirkenes</option>
               <option value="927">Norway - Kristiansand</option>
               <option value="929">Norway - Kristiansund</option>
               <option value="959">Norway - Lakselv</option>
               <option value="1349">Norway - Oslo - Fornebu</option>
               <option value="1348">Norway - Oslo - Oslo Airport, Gardermoen</option>
               <option value="1350">Norway - Oslo - Sandefjord</option>
               <option value="1681">Norway - Sogndal</option>
               <option value="1710">Norway - Stavanger</option>
               <option value="1816">Norway - Tromsoe</option>
               <option value="1817">Norway - Trondheim</option>
               <option value="1235">Oman - Muscat - Seeb</option>
               <option value="1558">Oman - Salalah</option>
               <option value="126">Pakistan - Bahawalpur</option>
               <option value="144">Pakistan - Bannu</option>
               <option value="342">Pakistan - Chitral</option>
               <option value="422">Pakistan - Dera Ismail Khan - Dera Ismail Khan Airport</option>
               <option value="503">Pakistan - Faisalabad</option>
               <option value="571">Pakistan - Gilgit</option>
               <option value="624">Pakistan - Gwadar</option>
               <option value="694">Pakistan - Hyderabad</option>
               <option value="717">Pakistan - Islamabad - Benazir Bhutto International Airport</option>
               <option value="743">Pakistan - Jacobabad</option>
               <option value="800">Pakistan - Jiwani</option>
               <option value="852">Pakistan - Karachi - Jinnah International Airport</option>
               <option value="882">Pakistan - Khuzdar</option>
               <option value="915">Pakistan - Kohat</option>
               <option value="955">Pakistan - Lahore</option>
               <option value="1155">Pakistan - Mianwali</option>
               <option value="1174">Pakistan - Mirpur</option>
               <option value="1183">Pakistan - Moenjodaro</option>
               <option value="1231">Pakistan - Multan</option>
               <option value="1238">Pakistan - Muzaffarabad</option>
               <option value="1267">Pakistan - Nawab Shah</option>
               <option value="1376">Pakistan - Panjgur</option>
               <option value="1388">Pakistan - Pasni</option>
               <option value="1402">Pakistan - Peshawar</option>
               <option value="1477">Pakistan - Quetta</option>
               <option value="1483">Pakistan - Rahim Yar Khan - Shaikh Zayed International Airport</option>
               <option value="1494">Pakistan - Rawala Kot</option>
               <option value="1495">Pakistan - Rawalpindi</option>
               <option value="1551">Pakistan - Saidu Sharif</option>
               <option value="1658">Pakistan - Sindhri</option>
               <option value="1670">Pakistan - Skardu</option>
               <option value="1721">Pakistan - Sui</option>
               <option value="1722">Pakistan - Sukkur</option>
               <option value="1823">Pakistan - Turbat</option>
               <option value="1987">Pakistan - Zhob</option>
               <option value="770">Panama - Jaque   </option>
               <option value="1374">Panama - Panama City - Tocumen International</option>
               <option value="28">Papua New Guinea - Aiyura</option>
               <option value="66">Papua New Guinea - Amazon Bay</option>
               <option value="745">Papua New Guinea - Jacquinot Bay</option>
               <option value="949">Papua New Guinea - Lae - Lae Nadzab Airport</option>
               <option value="1089">Papua New Guinea - Manguna</option>
               <option value="1439">Papua New Guinea - Port Moresby - Jackson Field</option>
               <option value="104">Paraguay - Asuncion - Asunción International Airport</option>
               <option value="714">Peru - Iquitos</option>
               <option value="772">Peru - Jauja</option>
               <option value="820">Peru - Juanjui</option>
               <option value="826">Peru - Juliaca</option>
               <option value="1004">Peru - Lima - J Chavez International</option>
               <option value="308">Philippines - Cebu City - Mactan-Cebu International</option>
               <option value="399">Philippines - Cuyo</option>
               <option value="812">Philippines - Jolo</option>
               <option value="1066">Philippines - Mactan Island - Nab</option>
               <option value="1091">Philippines - Manila - Ninoy Aquino International</option>
               <option value="560">Poland - Gdansk</option>
               <option value="926">Poland - Krakow (Cracow) - John Paul II International Airport</option>
               <option value="1448">Poland - Poznan, Lawica</option>
               <option value="1712">Poland - Stettin</option>
               <option value="1921">Poland - Warsaw - Frédéric Chopin</option>
               <option value="506">Portugal - Faro</option>
               <option value="550">Portugal - Funchal</option>
               <option value="679">Portugal - Horta</option>
               <option value="1011">Portugal - Lisbon - Lisboa</option>
               <option value="1424">Portugal - Ponta Delgada</option>
               <option value="1440">Portugal - Porto</option>
               <option value="1444">Portugal - Porto Santo</option>
               <option value="1597">Portugal - Santa Maria</option>
               <option value="1768">Portugal - Terceira</option>
               <option value="60">PR China - Altay</option>
               <option value="317">PR China - Changchun</option>
               <option value="319">PR China - Chaoyang, Beijing - Chaoyang Airport</option>
               <option value="326">PR China - Chengdu - Shuangliu</option>
               <option value="344">PR China - Chongqing - Jiangbei International Airport</option>
               <option value="403">PR China - Dalian - Zhoushuizi International Airport</option>
               <option value="613">PR China - Guangzhou (Canton) - Baiyun International Airport</option>
               <option value="620">PR China - Guilin - Liangjiang</option>
               <option value="641">PR China - Hangchow (Hangzhou)</option>
               <option value="645">PR China - Harbin (Haerbin)</option>
               <option value="782">PR China - Ji&#039;an</option>
               <option value="783">PR China - Jiamusi - Jiamusi Airport</option>
               <option value="784">PR China - Jiayuguan - Jiayuguan Airport</option>
               <option value="787">PR China - Jilin</option>
               <option value="789">PR China - Jinan</option>
               <option value="790">PR China - Jingdezhen</option>
               <option value="791">PR China - Jinghong - Gasa Airport</option>
               <option value="792">PR China - Jining</option>
               <option value="794">PR China - Jinjiang</option>
               <option value="796">PR China - Jinzhou - Jinzhou Airport</option>
               <option value="799">PR China - Jiujiang - Jiujiang Lushan Airport</option>
               <option value="1053">PR China - Luxi - Mangshi</option>
               <option value="1062">PR China - Macau - Macau International Airport</option>
               <option value="1255">PR China - Nanning</option>
               <option value="1478">PR China - Qingdao</option>
               <option value="1649">PR China - Shenyang</option>
               <option value="1650">PR China - Shenzhen - Shenzhen Bao&#039;an International</option>
               <option value="1740">PR China - Taiyuan</option>
               <option value="1847">PR China - Ulanhot</option>
               <option value="1868">PR China - Urumqi</option>
               <option value="1965">PR China - Wuhan</option>
               <option value="1968">PR China - Xi&#039;an - Xianyang</option>
               <option value="1967">PR China - Xiamen</option>
               <option value="1979">PR China - Yichang</option>
               <option value="25">Puerto Rico - Aguadilla</option>
               <option value="1125">Puerto Rico - Mayaguez</option>
               <option value="1423">Puerto Rico - Ponce</option>
               <option value="1582">Puerto Rico - San Juan - Luis Munoz Marin International Airport</option>
               <option value="440">Qatar - Doha - Doha International Airport</option>
               <option value="1554">Reunion - Saint Denis - Roland Garros Airport</option>
               <option value="255">Romania - Bucharest</option>
               <option value="256">Romania - Bucharest - Henri Coandă International Airport</option>
               <option value="379">Romania - Constanta (Constanța) - Constanta Int&#039;l Airport</option>
               <option value="20">Russia - Adler/Sochi</option>
               <option value="92">Russia - Arkhangelsk</option>
               <option value="313">Russia - Chabarovsk (Khabarovsk)</option>
               <option value="340">Russia - Chita (Tschita)</option>
               <option value="715">Russia - Irkutsk</option>
               <option value="842">Russia - Kaliningrad</option>
               <option value="869">Russia - Kazan - Kazan International Airport</option>
               <option value="1169">Russia - Mineralnye Vody</option>
               <option value="1214">Russia - Moscow - Domodedovo</option>
               <option value="1213">Russia - Moscow - Metropolitan Area</option>
               <option value="1215">Russia - Moscow - Sheremetyevo</option>
               <option value="1216">Russia - Moscow - Vnukovo</option>
               <option value="1233">Russia - Murmansk</option>
               <option value="1300">Russia - Nizhny Novgorod - Strigino International Airport</option>
               <option value="1315">Russia - Novosibirsk - Tolmachevo Airport</option>
               <option value="1541">Russia - Rostov-on-Don - Platov International Airport</option>
               <option value="1540">Russia - Rostov-on-Don - Rostov-on-Don Airport</option>
               <option value="1569">Russia - Samara - Kurumoch International Airport</option>
               <option value="1622">Russia - Saransk - Saransk Airport</option>
               <option value="1704">Russia - St. Petersburg (Leningrad) - Pulkovo</option>
               <option value="1839">Russia - Ufa</option>
               <option value="1843">Russia - Ukhta</option>
               <option value="1846">Russia - Ulan-Ude</option>
               <option value="1894">Russia - Velikiye Luki (Welikije Luki)</option>
               <option value="1971">Russia - Yakutsk</option>
               <option value="1978">Russia - Yekaterinburg - Koltsovo Airport</option>
               <option value="886">Rwanda - Kigali - Gregoire Kayibanda</option>
               <option value="304">Saint Lucia - Castries - George F. L. Charles Airport</option>
               <option value="1700">Saint Lucia - St. Lucia Hewanorra</option>
               <option value="1701">Saint Lucia - St. Lucia Vigle</option>
               <option value="895">Saint Vincent and the Grenadines - Kingstown - E. T. Joshua Airport</option>
               <option value="1707">Saint Vincent and the Grenadines - St. Vincent</option>
               <option value="1855">Saint Vincent and the Grenadines - Union Island</option>
               <option value="88">Samoa - Apia - Faleolo International Airport</option>
               <option value="1617">Sao Tome &amp; Principe - Sao Tome</option>
               <option value="431">Saudi Arabia - Dhahran</option>
               <option value="774">Saudi Arabia - Jeddah - King Abdulaziz International</option>
               <option value="819">Saudi Arabia - Jouf</option>
               <option value="878">Saudi Arabia - Khamis Mushayat</option>
               <option value="1067">Saudi Arabia - Madinah (Medina) - Mohammad Bin Abdulaziz</option>
               <option value="1132">Saudi Arabia - Medina</option>
               <option value="1520">Saudi Arabia - Riyadh - King Khaled International</option>
               <option value="1736">Saudi Arabia - Tabuk</option>
               <option value="1737">Saudi Arabia - Taif</option>
               <option value="1974">Saudi Arabia - Yanbu</option>
               <option value="408">Saudi Arabien - Dammam, King Fahad International</option>
               <option value="400">Senegal - Dakar - Léopold Sédar Senghor International Airport</option>
               <option value="172">Serbia - Belgrad (Beograd) - Belgrade Nikola Tesla International</option>
               <option value="1299">Serbia - Nis</option>
               <option value="1314">Serbia - Novi Sad</option>
               <option value="1456">Serbia - Pristina</option>
               <option value="1071">Seychelles - Mahe - Seychelles International</option>
               <option value="542">Sierra Leone - Freetown - Freetown-Lungi International Airport</option>
               <option value="1659">Singapore - Singapore - Changi</option>
               <option value="1660">Singapore - Singapore - Paya Lebar</option>
               <option value="1661">Singapore - Singapore - Seletar</option>
               <option value="237">Slovakia - Bratislava - M. R. Štefánik Airport</option>
               <option value="1016">Slovenia - Ljubljana - Brnik</option>
               <option value="1104">Slovenia - Maribor</option>
               <option value="611">Solomon Islands - Guadalcanal</option>
               <option value="676">Solomon Islands - Honiara Henderson International</option>
               <option value="1184">Somalia - Mogadishu</option>
               <option value="24">South Africa - Aggeneys</option>
               <option value="45">South Africa - Alexander Bay - Kortdoorn</option>
               <option value="55">South Africa - Alldays</option>
               <option value="210">South Africa - Bloemfontein - Bloemfontein Airport</option>
               <option value="290">South Africa - Cape Town - Cape Town International Airport</option>
               <option value="459">South Africa - Durban</option>
               <option value="464">South Africa - East London</option>
               <option value="479">South Africa - Ellisras</option>
               <option value="564">South Africa - George</option>
               <option value="806">South Africa - Johannesburg - OR Tambo International Airport</option>
               <option value="889">South Africa - Kimberley</option>
               <option value="908">South Africa - Kleinsee</option>
               <option value="968">South Africa - Lanseria</option>
               <option value="1051">South Africa - Lusisiki</option>
               <option value="1102">South Africa - Margate</option>
               <option value="1144">South Africa - Messina</option>
               <option value="1179">South Africa - Mkambati</option>
               <option value="1218">South Africa - Mossel Bay</option>
               <option value="1245">South Africa - Mzamba</option>
               <option value="1272">South Africa - Nelspruit</option>
               <option value="1273">South Africa - Nelspruit - Kruger Mpumalanga International Airport</option>
               <option value="1288">South Africa - Newcastle</option>
               <option value="1354">South Africa - Oudtshoorn</option>
               <option value="1404">South Africa - Phalaborwa</option>
               <option value="1410">South Africa - Pietermaritzburg</option>
               <option value="1411">South Africa - Pietersburg</option>
               <option value="1412">South Africa - Pilanesberg/Sun City</option>
               <option value="1416">South Africa - Plettenberg Bay</option>
               <option value="1429">South Africa - Port Elizabeth</option>
               <option value="1452">South Africa - Pretoria - Wonderboom Apt.</option>
               <option value="1511">South Africa - Richards Bay</option>
               <option value="1665">South Africa - Sishen</option>
               <option value="1674">South Africa - Skukuza</option>
               <option value="1689">South Africa - Springbok</option>
               <option value="1774">South Africa - Thaba&#039;Nchu</option>
               <option value="1850">South Africa - Ulundi</option>
               <option value="1853">South Africa - Umtata</option>
               <option value="1859">South Africa - Upington</option>
               <option value="1913">South Africa - Vryheid</option>
               <option value="1919">South Africa - Walvis Bay</option>
               <option value="1930">South Africa - Welkom</option>
               <option value="1472">South Korea - Pu San (Busan) - Gimhae International Airport</option>
               <option value="1636">South Korea - Seoul - Incheon International Airport</option>
               <option value="1637">South Korea - Seoul - Kimpo</option>
               <option value="1849">South Korea - Ulsan</option>
               <option value="821">South Sudan - Juba</option>
               <option value="53">Spain - Alicante</option>
               <option value="58">Spain - Almeria</option>
               <option value="96">Spain - Arrecife/Lanzarote</option>
               <option value="122">Spain - Badajoz</option>
               <option value="145">Spain - Barcelona</option>
               <option value="196">Spain - Bilbao</option>
               <option value="385">Spain - Cordoba</option>
               <option value="546">Spain - Fuerteventura</option>
               <option value="567">Spain - Gerona</option>
               <option value="587">Spain - Granada</option>
               <option value="695">Spain - Ibiza</option>
               <option value="777">Spain - Jerez de la Frontera/Cadiz - La Parra</option>
               <option value="947">Spain - La Coruna</option>
               <option value="976">Spain - Las Palmas</option>
               <option value="1038">Spain - Los Rodeos</option>
               <option value="1070">Spain - Madrid - Barajas Airport</option>
               <option value="1072">Spain - Mahon</option>
               <option value="1077">Spain - Malaga</option>
               <option value="1232">Spain - Murcia</option>
               <option value="1359">Spain - Oviedo</option>
               <option value="1369">Spain - Palma de Mallorca</option>
               <option value="1502">Spain - Reina Sofia</option>
               <option value="1506">Spain - Reus</option>
               <option value="1589">Spain - San Sebastian</option>
               <option value="1594">Spain - Santa Cruz de la Palma</option>
               <option value="1599">Spain - Santander</option>
               <option value="1609">Spain - Santiago de Compostela</option>
               <option value="1638">Spain - Sevilla</option>
               <option value="1764">Spain - Tenerife</option>
               <option value="1766">Spain - Tenerife - Norte Los Rodeos</option>
               <option value="1765">Spain - Tenerife - Sur Reina Sofia</option>
               <option value="1882">Spain - Valencia</option>
               <option value="1884">Spain - Valladolid</option>
               <option value="1886">Spain - Valverde</option>
               <option value="1905">Spain - Vigo</option>
               <option value="1911">Spain - Vitoria</option>
               <option value="1986">Spain - Zaragoza</option>
               <option value="370">Sri Lanka - Colombo - Bandaranaike International Airport</option>
               <option value="746">Sri Lanka - Jaffna - Kankesanturai</option>
               <option value="861">Sudan - Kassala</option>
               <option value="881">Sudan - Khartoum - Khartoum International Airport</option>
               <option value="1381">Suriname - Paramaribo - Zanderij International</option>
               <option value="1093">Swaziland - Manzini - Matsapha International</option>
               <option value="584">Sweden - Gothenburg (Göteborg) - Landvetter</option>
               <option value="657">Sweden - Helsingborg</option>
               <option value="804">Sweden - Jönköping (Jonkoping) - Axamo Airport</option>
               <option value="844">Sweden - Kalmar</option>
               <option value="854">Sweden - Karlstad</option>
               <option value="901">Sweden - Kiruna</option>
               <option value="928">Sweden - Kristianstad</option>
               <option value="998">Sweden - Lidkoeping</option>
               <option value="1048">Sweden - Lulea</option>
               <option value="1082">Sweden - Malmo (Malmö) - Malmö Airport</option>
               <option value="1081">Sweden - Malmo (Malmoe)</option>
               <option value="1306">Sweden - Norrkoeping</option>
               <option value="1323">Sweden - Oerebro</option>
               <option value="1538">Sweden - Ronneby</option>
               <option value="1714">Sweden - Stockholm - Arlanda</option>
               <option value="1715">Sweden - Stockholm - Bromma</option>
               <option value="1713">Sweden - Stockholm Metropolitan Area</option>
               <option value="1725">Sweden - Sundsvall</option>
               <option value="1851">Sweden - Umea</option>
               <option value="1877">Sweden - Vaexjoe</option>
               <option value="1893">Sweden - Vasteras</option>
               <option value="1910">Sweden - Visby</option>
               <option value="61">Switzerland - Altenrhein</option>
               <option value="153">Switzerland - Basel</option>
               <option value="190">Switzerland - Berne, Bern-Belp</option>
               <option value="191">Switzerland - Berne, Railway Service</option>
               <option value="562">Switzerland - Geneva - Geneva-Cointrin International Airport</option>
               <option value="1047">Switzerland - Lugano</option>
               <option value="1990">Switzerland - Zurich (Zürich) - Kloten</option>
               <option value="43">Syria - Aleppo</option>
               <option value="407">Syria - Damascus, International</option>
               <option value="850">Taiwan - Kaohsiung International</option>
               <option value="1075">Taiwan - Makung</option>
               <option value="1738">Taiwan - Taipei - Chiang Kai Shek</option>
               <option value="1739">Taiwan - Taipei - Sung Shan</option>
               <option value="460">Tajikistan - Dushanbe (Duschanbe) - Dushanbe Airport</option>
               <option value="93">Tanzania - Arusha</option>
               <option value="410">Tanzania - Dar es Salam (Daressalam) - Julius Nyerere Int&#039;l</option>
               <option value="439">Tanzania - Dodoma - Dodoma Airport</option>
               <option value="887">Tanzania - Kilimadjaro</option>
               <option value="139">Thailand - Bangkok, Don Muang</option>
               <option value="140">Thailand - Bangkok, Suvarnabhumi International</option>
               <option value="329">Thailand - Chiang Mai - Chiang Mai International Airport</option>
               <option value="651">Thailand - Hatyai (Hat Yai)</option>
               <option value="1252">Thailand - Nakhon Si Thammarat</option>
               <option value="1390">Thailand - Pattaya</option>
               <option value="1408">Thailand - Phuket</option>
               <option value="1835">Thailand - Ubon Ratchathani - Muang Ubon Airport</option>
               <option value="1838">Thailand - Udon Thani</option>
               <option value="1871">Thailand - Utapao (Pattaya)</option>
               <option value="125">The Bahamas - Bahamas - Lynden Pindling International Airport</option>
               <option value="1018">Togo - Lome</option>
               <option value="1318">Tonga - Nuku&#039;alofa - Fua&#039;Amotu International</option>
               <option value="1442">Trinidad and Tobago - Port of Spain - Piarco International</option>
               <option value="1628">Trinidad and Tobago - Scarborough - Crown Point International</option>
               <option value="1791">Trinidad and Tobago - Tobago</option>
               <option value="437">Tunisia - Djerba</option>
               <option value="1188">Tunisia - Monastir</option>
               <option value="1639">Tunisia - Sfax</option>
               <option value="1822">Tunisia - Tunis - Carthage</option>
               <option value="15">Turkey - Adana</option>
               <option value="19">Turkey - Adiyaman</option>
               <option value="77">Turkey - Ankara</option>
               <option value="78">Turkey - Ankara - Esenboğa International Airport</option>
               <option value="83">Turkey - Antalya</option>
               <option value="217">Turkey - Bodrum - Milas Airport</option>
               <option value="401">Turkey - Dalaman</option>
               <option value="419">Turkey - Denizli</option>
               <option value="491">Turkey - Erzincan</option>
               <option value="492">Turkey - Erzurum</option>
               <option value="559">Turkey - Gaziantep</option>
               <option value="720">Turkey - Istanbul - Istanbul Atatürk Airport</option>
               <option value="721">Turkey - Istanbul - Sabiha Gokcen</option>
               <option value="725">Turkey - Izmir</option>
               <option value="726">Turkey - Izmir - Adnan Menderes Airport</option>
               <option value="836">Turkey - Kahramanmaras</option>
               <option value="857">Turkey - Kars</option>
               <option value="868">Turkey - Kayseri</option>
               <option value="920">Turkey - Konya</option>
               <option value="1078">Turkey - Malatya</option>
               <option value="1098">Turkey - Maras</option>
               <option value="1100">Turkey - Mardin</option>
               <option value="1234">Turkey - Mus</option>
               <option value="1572">Turkey - Samsun</option>
               <option value="1667">Turkey - Sivas</option>
               <option value="1760">Turkey - Tekirdag - Corlu</option>
               <option value="1807">Turkey - Trabzon</option>
               <option value="1887">Turkey - Van - Ferit Melen</option>
               <option value="99">Turkmenistan - Ashgabat - Saparmurat Turkmenbashy Int. Airport</option>
               <option value="487">Uganda - Entebbe - Entebbe International Airport</option>
               <option value="621">Uganda - Gulu</option>
               <option value="793">Uganda - Jinja</option>
               <option value="880">Ukraine - Kharkov</option>
               <option value="884">Ukraine - Kiev - Borispol</option>
               <option value="885">Ukraine - Kiev - Zhulhany</option>
               <option value="1055">Ukraine - Lvov (Lwow, Lemberg)</option>
               <option value="1296">Ukraine - Nikolaev</option>
               <option value="1322">Ukraine - Odessa</option>
               <option value="1657">Ukraine - Simferopol</option>
               <option value="1875">Ukraine - Uzhgorod</option>
               <option value="9">United Arab Emirates - Abu Dhabi - Abu Dhabi International</option>
               <option value="33">United Arab Emirates - Al Ain</option>
               <option value="49">United Arab Emirates - Alfujairah (Fujairah)</option>
               <option value="447">United Arab Emirates - Dubai - Dubai International Airport</option>
               <option value="547">United Arab Emirates - Fujairah, International Airport</option>
               <option value="1493">United Arab Emirates - Ras al Khaymah (Ras al Khaimah)</option>
               <option value="1644">United Arab Emirates - Sharjah</option>
               <option value="5">United Kingdom - Aberdeen</option>
               <option value="151">United Kingdom - Barra (the famous tidal beach landing)</option>
               <option value="170">United Kingdom - Belfast - Belfast International Airport</option>
               <option value="169">United Kingdom - Belfast - George Best Belfast City Airport</option>
               <option value="177">United Kingdom - Benbecula</option>
               <option value="201">United Kingdom - Birmingham - Birmingham International Airport</option>
               <option value="206">United Kingdom - Blackpool</option>
               <option value="230">United Kingdom - Bournemouth</option>
               <option value="247">United Kingdom - Bristol</option>
               <option value="283">United Kingdom - Cambrigde</option>
               <option value="284">United Kingdom - Campbeltown</option>
               <option value="292">United Kingdom - Cardiff - Cardiff Airport</option>
               <option value="391">United Kingdom - Coventry - Baginton</option>
               <option value="424">United Kingdom - Derry (Londonderry)</option>
               <option value="441">United Kingdom - Doncaster/Sheffield, Robin Hood International Airport</option>
               <option value="455">United Kingdom - Dundee</option>
               <option value="500">United Kingdom - Exeter</option>
               <option value="502">United Kingdom - Fair Isle (Shetland)</option>
               <option value="535">United Kingdom - Foula (Shetland)</option>
               <option value="575">United Kingdom - Glasgow</option>
               <option value="574">United Kingdom - Glasgow, Prestwick</option>
               <option value="685">United Kingdom - Humberside</option>
               <option value="711">United Kingdom - Inverness</option>
               <option value="718">United Kingdom - Islay</option>
               <option value="874">United Kingdom - Kent (Manston) Kent International</option>
               <option value="900">United Kingdom - Kirkwall (Orkney)</option>
               <option value="965">United Kingdom - Land&#039;s End</option>
               <option value="987">United Kingdom - Leeds/Bradford</option>
               <option value="993">United Kingdom - Lerwick/Tingwall (Shetland Islands)</option>
               <option value="1014">United Kingdom - Liverpool</option>
               <option value="1021">United Kingdom - London - City Airport</option>
               <option value="1022">United Kingdom - London - Gatwick</option>
               <option value="1023">United Kingdom - London - Heathrow</option>
               <option value="1024">United Kingdom - London - Luton</option>
               <option value="1025">United Kingdom - London - Stansted</option>
               <option value="1020">United Kingdom - London Metropolitan Area</option>
               <option value="1026">United Kingdom - Londonderry - Eglinton</option>
               <option value="1056">United Kingdom - Lydd - Lydd International Airport</option>
               <option value="1086">United Kingdom - Manchester</option>
               <option value="1287">United Kingdom - Newcastle</option>
               <option value="1278">United Kingdom - Newquay</option>
               <option value="1309">United Kingdom - Norwich</option>
               <option value="1310">United Kingdom - Nottingham - East Midlands</option>
               <option value="1339">United Kingdom - Orkney - Kirkwall</option>
               <option value="1358">United Kingdom - Out Skerries (Shetland)</option>
               <option value="1646">United Kingdom - Sheffield, City Airport</option>
               <option value="1647">United Kingdom - Sheffield, Doncaster, Robin Hood International Airport</option>
               <option value="1682">United Kingdom - Southampton - Eastleigh</option>
               <option value="1686">United Kingdom - Southend (London)</option>
               <option value="1708">United Kingdom - Stansted (London)</option>
               <option value="1717">United Kingdom - Stornway</option>
               <option value="1723">United Kingdom - Sumburgh (Shetland)</option>
               <option value="1757">United Kingdom - Teesside, Durham Tees Valley</option>
               <option value="1856">United Kingdom - Unst (Shetland Island) - Baltasound Airport</option>
               <option value="1945">United Kingdom - Wick</option>
               <option value="1198">Uruguay - Montevideo - Carrasco International Airport</option>
               <option value="6">USA - Aberdeen (SD)</option>
               <option value="8">USA - Abilene (TX)</option>
               <option value="31">USA - Akron (OH)</option>
               <option value="36">USA - Albany (GA)</option>
               <option value="37">USA - Albany (NY) - Albany International Airport</option>
               <option value="40">USA - Albuquerque (NM)</option>
               <option value="48">USA - Alexandria - Esler Field</option>
               <option value="56">USA - Allentown (PA)</option>
               <option value="62">USA - Altoona (PA)</option>
               <option value="63">USA - Altus</option>
               <option value="65">USA - Amarillo (TX)</option>
               <option value="72">USA - Anchorage (AK) - Ted Stevens Anchorage International</option>
               <option value="80">USA - Ann Arbor (MI)</option>
               <option value="82">USA - Anniston (AL)</option>
               <option value="89">USA - Appelton/Neenah/Menasha (WI)</option>
               <option value="98">USA - Asheville (NC)</option>
               <option value="101">USA - Aspen, (CO) - Aspen-Pitkin County Airport</option>
               <option value="108">USA - Athens (GA)</option>
               <option value="109">USA - Athens (OH)</option>
               <option value="110">USA - Atlanta (GA) - Hartsfield Atlanta International Airport</option>
               <option value="111">USA - Atlantic City (NJ) - Atlantic City International</option>
               <option value="115">USA - Augusta (GA)</option>
               <option value="116">USA - Augusta (ME) - Augusta State Airport</option>
               <option value="118">USA - Austin (TX) - Austin-Bergstrom Airport</option>
               <option value="128">USA - Bakersfield (CA)</option>
               <option value="131">USA - Baltimore (MD) - Washington International Airport</option>
               <option value="141">USA - Bangor (ME)</option>
               <option value="159">USA - Baton Rouge (LA) - Baton Rouge Metropolitan Airport</option>
               <option value="161">USA - Beaumont/Pt. Arthur (TX)</option>
               <option value="162">USA - Beckley (WV)</option>
               <option value="174">USA - Bellingham (WA)</option>
               <option value="176">USA - Bemidji (MN)</option>
               <option value="180">USA - Benton Harbour (MI)</option>
               <option value="192">USA - Bethel (AK)</option>
               <option value="197">USA - Billings (MT)</option>
               <option value="202">USA - Birmingham (AL)</option>
               <option value="204">USA - Bismarck (ND) - Bismarck Municipal Airport</option>
               <option value="211">USA - Bloomington (IL)</option>
               <option value="212">USA - Bloomington (IN)</option>
               <option value="213">USA - Bluefield (WV)</option>
               <option value="219">USA - Boise (ID) - Boise Air Terminal</option>
               <option value="226">USA - Borrego Springs (CA)</option>
               <option value="227">USA - Boston (MA) - General Edward Lawrence Logan</option>
               <option value="232">USA - Bozeman (MT)</option>
               <option value="233">USA - Bradford/Warren (PA) /Olean (NY)</option>
               <option value="234">USA - Brainerd (MN)</option>
               <option value="243">USA - Bridgeport (CT)</option>
               <option value="250">USA - Brookings (SD)</option>
               <option value="252">USA - Brunswick (GA)</option>
               <option value="262">USA - Buffalo/Niagara Falls (NY)</option>
               <option value="265">USA - Bullhead City (NV)</option>
               <option value="267">USA - Burbank (CA)</option>
               <option value="269">USA - Burlington (VT)</option>
               <option value="268">USA - Burlington IA</option>
               <option value="271">USA - Butte (MT)</option>
               <option value="293">USA - Carlsbad (CA)</option>
               <option value="296">USA - Carson City (NV)</option>
               <option value="301">USA - Casper (WY)</option>
               <option value="309">USA - Cedar City (UT)</option>
               <option value="310">USA - Cedar Rapids IA</option>
               <option value="315">USA - Champaign (IL)</option>
               <option value="320">USA - Charleston (SC)</option>
               <option value="321">USA - Charleston (WV) - Yeager Airport</option>
               <option value="322">USA - Charlotte (NC)</option>
               <option value="323">USA - Charlottesville (VA)</option>
               <option value="325">USA - Chattanooga (TN)</option>
               <option value="328">USA - Cheyenne (WY) - Cheyenne Regional Airport</option>
               <option value="333">USA - Chicago (IL)</option>
               <option value="331">USA - Chicago (IL), Midway</option>
               <option value="332">USA - Chicago (IL), O&#039;Hare International Airport</option>
               <option value="335">USA - Chico (CA)</option>
               <option value="349">USA - Cincinnati (OH) - Cincinnati/Northern Kentucky Int&#039;l</option>
               <option value="355">USA - Clarksburg (WV)</option>
               <option value="359">USA - Cleveland (OH) - Cleveland Hopkins International</option>
               <option value="358">USA - Cleveland (OH) , Burke Lakefront</option>
               <option value="362">USA - Cody/Powell/Yellowstone (WY)</option>
               <option value="363">USA - Coffmann Cove (AK)</option>
               <option value="367">USA - College Station/Bryan (TX)</option>
               <option value="371">USA - Colorado Springs (CO)</option>
               <option value="372">USA - Columbia (SC) - Columbia Metropolitan Airport</option>
               <option value="373">USA - Columbus (GA)</option>
               <option value="374">USA - Columbus (OH) - Port Columbus International</option>
               <option value="376">USA - Concord (CA) - Buchanan Field</option>
               <option value="377">USA - Concord (NH) - Concord Municipal Airport</option>
               <option value="386">USA - Cordova (AK)</option>
               <option value="389">USA - Corpus Christi (TX)</option>
               <option value="393">USA - Craig (AK)</option>
               <option value="394">USA - Crescent City (CA)</option>
               <option value="404">USA - Dallas (TX) , Love Field</option>
               <option value="405">USA - Dallas/Ft. Worth (TX) - Dallas/Fort Worth International</option>
               <option value="409">USA - Danville (VA)</option>
               <option value="413">USA - Dayton (OH)</option>
               <option value="414">USA - Daytona Beach (FL)</option>
               <option value="415">USA - Decatur (IL)</option>
               <option value="421">USA - Denver (CO) - Denver International Airport</option>
               <option value="425">USA - Des Moines (IA) - Des Moines International Airport</option>
               <option value="426">USA - Detroit (MI) , Coleman A. Young Municipal</option>
               <option value="428">USA - Detroit (MI) , Metropolitan Area</option>
               <option value="427">USA - Detroit (MI) , Wayne County Airport</option>
               <option value="429">USA - Devils Lake (ND)</option>
               <option value="434">USA - Dillingham (AK)</option>
               <option value="444">USA - Dothan (AL)</option>
               <option value="450">USA - Dubois (PA)</option>
               <option value="452">USA - Dubuque IA</option>
               <option value="454">USA - Duluth (MN) /Superior (WI)</option>
               <option value="458">USA - Durango (CO)</option>
               <option value="461">USA - Dutch Harbor (AK)</option>
               <option value="466">USA - Eau Clarie (WI)</option>
               <option value="482">USA - El Paso (TX) - El Paso International Airport</option>
               <option value="477">USA - Elkhart (IN)</option>
               <option value="478">USA - Elko (NV)</option>
               <option value="481">USA - Elmira (NY)</option>
               <option value="483">USA - Ely (NV)</option>
               <option value="489">USA - Erie (PA)</option>
               <option value="494">USA - Escanaba (MI)</option>
               <option value="496">USA - Eugene (OR)</option>
               <option value="497">USA - Eureka (CA)</option>
               <option value="498">USA - Evansville (IN)</option>
               <option value="501">USA - Fairbanks (AK)</option>
               <option value="504">USA - Fargo (ND) (MN)</option>
               <option value="505">USA - Farmington (NM)</option>
               <option value="508">USA - Fayetteville (AR)</option>
               <option value="509">USA - Fayetteville/Ft. Bragg (NC)</option>
               <option value="512">USA - Flagstaff (AZ)</option>
               <option value="514">USA - Flint (MI)</option>
               <option value="516">USA - Florence (SC)</option>
               <option value="522">USA - Fort Dodge IA</option>
               <option value="523">USA - Fort Huachuca/Sierra Vista (AZ)</option>
               <option value="524">USA - Fort Lauderdale/Hollywood (FL)</option>
               <option value="526">USA - Fort Myers, Metropolitan Area (FL)</option>
               <option value="527">USA - Fort Myers, Southwest Florida Reg (FL)</option>
               <option value="528">USA - Fort Riley (KS) - Marshall AAF</option>
               <option value="530">USA - Fort Smith (AR)</option>
               <option value="532">USA - Fort Walton Beach (FL)</option>
               <option value="533">USA - Fort Wayne (IN)</option>
               <option value="534">USA - Fort Worth (TX) - Dallas/Fort Worth International Airport</option>
               <option value="539">USA - Franklin/Oil City (PA)</option>
               <option value="544">USA - Fresno (CA)</option>
               <option value="553">USA - Gadsden (AL)</option>
               <option value="554">USA - Gainesville (FL)</option>
               <option value="570">USA - Gilette (WY)</option>
               <option value="576">USA - Glasgow (MT)</option>
               <option value="577">USA - Glendive (MT)</option>
               <option value="589">USA - Grand Canyon (AZ)</option>
               <option value="591">USA - Grand Forks (ND)</option>
               <option value="592">USA - Grand Junction (CO)</option>
               <option value="593">USA - Grand Rapids (MI)</option>
               <option value="594">USA - Grand Rapids (MN)</option>
               <option value="596">USA - Great Falls (MT)</option>
               <option value="598">USA - Green Bay (WI)</option>
               <option value="599">USA - Greenbrier/Lewisburg (WV)</option>
               <option value="600">USA - Greensboro/Winston Salem (NC)</option>
               <option value="601">USA - Greenville (MS)</option>
               <option value="602">USA - Greenville (NC)</option>
               <option value="603">USA - Greenville/Spartanburg (SC)</option>
               <option value="609">USA - Groton/New London (CT)</option>
               <option value="619">USA - Gulfport/Biloxi (MS)</option>
               <option value="622">USA - Gunnison/Crested Butte (CO)</option>
               <option value="630">USA - Haines (AK)</option>
               <option value="640">USA - Hancock (MI)</option>
               <option value="646">USA - Harlingen/South Padre Island (TX)</option>
               <option value="649">USA - Harrisburg (PA) - Harrisburg International</option>
               <option value="648">USA - Harrisburg (PA) - Harrisburg Skyport</option>
               <option value="650">USA - Hartford (CT) /Springfield (MA)</option>
               <option value="654">USA - Havre (MT)</option>
               <option value="656">USA - Helena (MT)</option>
               <option value="662">USA - Hibbing (MN)</option>
               <option value="663">USA - Hickory (NC)</option>
               <option value="664">USA - Hilo (HI)</option>
               <option value="665">USA - Hilton Head Island (SC)</option>
               <option value="673">USA - Homer (AK)</option>
               <option value="677">USA - Honolulu (HI) - Honolulu International Airport</option>
               <option value="678">USA - Hoonah (AK)</option>
               <option value="680">USA - Houston (TX) , Hobby</option>
               <option value="681">USA - Houston, TX - George Bush Intercontinental Airport</option>
               <option value="686">USA - Huntington (WV)</option>
               <option value="687">USA - Huntsville (AL)</option>
               <option value="689">USA - Huron (SD)</option>
               <option value="691">USA - Hyannis (MA)</option>
               <option value="692">USA - Hydaburg (AK)</option>
               <option value="696">USA - Idaho Falls (ID)</option>
               <option value="700">USA - Iliamna (AK)</option>
               <option value="701">USA - Imperial (CA)</option>
               <option value="704">USA - Indianapolis (IN) International</option>
               <option value="708">USA - International Falls (MN)</option>
               <option value="712">USA - Inykern (CA)</option>
               <option value="722">USA - Ithaca/Cortland (NY)</option>
               <option value="728">USA - Jackson (MI) - Reynolds Municipal</option>
               <option value="731">USA - Jackson (MS) - Hawkins Field   </option>
               <option value="730">USA - Jackson (MS) - Jackson Internationall</option>
               <option value="732">USA - Jackson (TN) - Mckellar</option>
               <option value="727">USA - Jackson Hole (WY)</option>
               <option value="733">USA - Jackson Hole (WY)</option>
               <option value="729">USA - Jackson,  MN  </option>
               <option value="734">USA - Jacksonville (AR)  Little Rock AFB   </option>
               <option value="735">USA - Jacksonville (FL) - Cecil Field NAS   </option>
               <option value="738">USA - Jacksonville (FL) - Craig Municipal   </option>
               <option value="737">USA - Jacksonville (FL) - International</option>
               <option value="736">USA - Jacksonville (FL) Jacksonville NAS   </option>
               <option value="739">USA - Jacksonville (IL) - Municipal Airport</option>
               <option value="740">USA - Jacksonville (NC)</option>
               <option value="741">USA - Jacksonville (TX)</option>
               <option value="761">USA - Jamestown (ND)</option>
               <option value="762">USA - Jamestown (NY)</option>
               <option value="768">USA - Janesville (WI) - Rock County</option>
               <option value="775">USA - Jefferson City (MO) - Jefferson Memorial</option>
               <option value="807">USA - Johnson City (NY) - Binghamton/Endicott/Johnson</option>
               <option value="808">USA - Johnston Island</option>
               <option value="809">USA - Johnstown (PA)</option>
               <option value="814">USA - Jonesboro (AR)  Jonesboro Airport</option>
               <option value="815">USA - Joplin (MO)</option>
               <option value="829">USA - Juneau (AK) - Juneau International Airport</option>
               <option value="837">USA - Kahului (HI)</option>
               <option value="840">USA - Kalamazoo/Battle Creek (MI)</option>
               <option value="843">USA - Kalispell (MT)</option>
               <option value="846">USA - Kamuela (HI)</option>
               <option value="849">USA - Kansas City (MO) - Kansas City International Airport</option>
               <option value="851">USA - Kapalua West (HI)</option>
               <option value="866">USA - Kaunakakai (HI)</option>
               <option value="873">USA - Kenai (AK)</option>
               <option value="876">USA - Ketchikan (AK)</option>
               <option value="877">USA - Key West (FL)</option>
               <option value="888">USA - Killeem (TX)</option>
               <option value="891">USA - King Salomon (AK)</option>
               <option value="894">USA - Kingston (NC)</option>
               <option value="906">USA - Klamath Fall (OR)</option>
               <option value="907">USA - Klawock (AK)</option>
               <option value="910">USA - Knoxville (TN)</option>
               <option value="914">USA - Kodiak (AK)</option>
               <option value="919">USA - Kona (HI)</option>
               <option value="924">USA - Kotzbue (AK)</option>
               <option value="948">USA - La Crosse (WI)</option>
               <option value="944">USA - Labouchere Bay (AK)</option>
               <option value="951">USA - Lafayette (IN)</option>
               <option value="952">USA - Lafayette, La</option>
               <option value="956">USA - Lake Charles (LA)</option>
               <option value="957">USA - Lake Havasu City (AZ)</option>
               <option value="958">USA - Lake Tahoe (CA)</option>
               <option value="963">USA - Lanai City (HI)</option>
               <option value="964">USA - Lancaster (PA)</option>
               <option value="969">USA - Lansing (MI)</option>
               <option value="973">USA - Laramie (WY)</option>
               <option value="974">USA - Laredo (TX)</option>
               <option value="977">USA - Las Vegas (NV)</option>
               <option value="978">USA - Latrobe (PA)</option>
               <option value="980">USA - Laurel/Hattisburg (MS)</option>
               <option value="982">USA - Lawton (OK)</option>
               <option value="986">USA - Lebanon (NH)</option>
               <option value="994">USA - Lewiston (ID)</option>
               <option value="995">USA - Lewistown (MT)</option>
               <option value="996">USA - Lexington (KY)</option>
               <option value="1001">USA - Lihue (HI)</option>
               <option value="1007">USA - Lincoln (NE)</option>
               <option value="1013">USA - Little Rock (AR)</option>
               <option value="1027">USA - Long Beach (CA)</option>
               <option value="1028">USA - Long Island (AK)</option>
               <option value="1029">USA - Long Island, Islip (NY) - Mac Arthur</option>
               <option value="1031">USA - Longview/Kilgore (TX)</option>
               <option value="1035">USA - Los Angeles (CA) - International</option>
               <option value="1041">USA - Louisville (KY)</option>
               <option value="1043">USA - Lubbock (TX)</option>
               <option value="1057">USA - Lynchburg (VA)</option>
               <option value="1059">USA - Lyons (KS) - Rice County Municipal</option>
               <option value="1065">USA - Macon (GA)</option>
               <option value="1068">USA - Madison (WI) - Dane County Regional Airport</option>
               <option value="1087">USA - Manchester (NH)</option>
               <option value="1099">USA - Marathon (FL)</option>
               <option value="1107">USA - Marquette (MI)</option>
               <option value="1113">USA - Martha&#039;s Vineyard (MA)</option>
               <option value="1114">USA - Martinsburg (WV)</option>
               <option value="1117">USA - Mason City IA</option>
               <option value="1121">USA - Mattoon (IL)</option>
               <option value="1127">USA - McAllen (TX)</option>
               <option value="1131">USA - Medford (OR)</option>
               <option value="1135">USA - Melbourne (FL)</option>
               <option value="1137">USA - Memphis (TN)</option>
               <option value="1140">USA - Merced (CA)</option>
               <option value="1142">USA - Meridian (MS)</option>
               <option value="1145">USA - Metlakatla (AK)</option>
               <option value="1154">USA - Miami (FL)</option>
               <option value="1157">USA - Midland/Odessa (TX)</option>
               <option value="1158">USA - Midway Island - Sand Island Field</option>
               <option value="1165">USA - Miles City (MT)</option>
               <option value="1167">USA - Milwaukee (WI)</option>
               <option value="1170">USA - Minneapolis - St. Paul International Airport (MN)</option>
               <option value="1171">USA - Minot (ND)</option>
               <option value="1175">USA - Missula (MT)</option>
               <option value="1176">USA - Mitchell (SD)</option>
               <option value="1181">USA - Mobile (AL) - Pascagoula (MS)</option>
               <option value="1182">USA - Modesto (CA)</option>
               <option value="1186">USA - Moline/Quad Cities (IL)</option>
               <option value="1190">USA - Monroe (LA)</option>
               <option value="1195">USA - Monterey (CA)</option>
               <option value="1199">USA - Montgomery (AL) - Montgomery Regional Airport</option>
               <option value="1204">USA - Montrose/Tellruide (CO)</option>
               <option value="1209">USA - Morgantown (WV)</option>
               <option value="1217">USA - Moses Lake (WA)</option>
               <option value="1227">USA - Mt. McKinley (AK)</option>
               <option value="1236">USA - Muscle Shoals (AL)</option>
               <option value="1237">USA - Muskegon (MI)</option>
               <option value="1242">USA - Myrtle Beach (SC) - Grand Strand Airport</option>
               <option value="1241">USA - Myrtle Beach (SC) - Myrtle Beach AFB</option>
               <option value="1257">USA - Nantucket (MA)</option>
               <option value="1259">USA - Naples (FL)</option>
               <option value="1263">USA - Nashville (TN)</option>
               <option value="1275">USA - New Bern (NC)</option>
               <option value="1276">USA - New Haven (CT)</option>
               <option value="1277">USA - New Orleans, La</option>
               <option value="1280">USA - New York - John F. Kennedy (NY)</option>
               <option value="1281">USA - New York - LaGuardia (NY)</option>
               <option value="1282">USA - New York - Newark (NJ)</option>
               <option value="1283">USA - New York (NY)</option>
               <option value="1284">USA - Newburgh (NY)</option>
               <option value="1290">USA - Newport News/Williamsburg (VA)</option>
               <option value="1292">USA - Niagara Falls International</option>
               <option value="1301">USA - Nome (AK)</option>
               <option value="1304">USA - Norfolk/Virginia Beach (VA)</option>
               <option value="1307">USA - North Bend (OR)</option>
               <option value="1319">USA - Oakland (CA)</option>
               <option value="1328">USA - Oklahoma City (OK) - Will Rogers World</option>
               <option value="1331">USA - Omaha (NE)</option>
               <option value="1333">USA - Ontario (CA)</option>
               <option value="1336">USA - Orange County (Santa Ana) (CA)</option>
               <option value="1341">USA - Orlando - International Airport (FL)</option>
               <option value="1340">USA - Orlando Metropolitan Area (FL)</option>
               <option value="1346">USA - Oshkosh (WI)</option>
               <option value="1360">USA - Owensboro (KY)</option>
               <option value="1361">USA - Oxnard (CA)</option>
               <option value="1364">USA - Paducah (KY)</option>
               <option value="1365">USA - Page/Lake Powell (AZ)</option>
               <option value="1367">USA - Pakersburg (WV) /Marietta (OH)</option>
               <option value="1373">USA - Palm Springs (CA)</option>
               <option value="1371">USA - Palmdale/Lancaster (CA)</option>
               <option value="1375">USA - Panama City (FL)</option>
               <option value="1387">USA - Pasco (WA)</option>
               <option value="1392">USA - Pellston (MI)</option>
               <option value="1394">USA - Pendelton (OR)</option>
               <option value="1395">USA - Pensacola (FL)</option>
               <option value="1396">USA - Peoria/Bloomington (IL)</option>
               <option value="1403">USA - Petersburg (AK)</option>
               <option value="1405">USA - Philadelphia (PA) - International</option>
               <option value="1407">USA - Phoenix (AZ) - Sky Harbor International</option>
               <option value="1409">USA - Pierre (SD)</option>
               <option value="1414">USA - Pittsburgh International Airport (PA)</option>
               <option value="1415">USA - Plattsburgh (NY)</option>
               <option value="1417">USA - Pocatello (ID)</option>
               <option value="1426">USA - Port Angeles (WA)</option>
               <option value="1434">USA - Portland (ME)</option>
               <option value="1435">USA - Portland International (OR)</option>
               <option value="1447">USA - Poughkeepsie (NY)</option>
               <option value="1451">USA - Presque Island (ME)</option>
               <option value="1458">USA - Providence (RI)</option>
               <option value="1459">USA - Prudhoe Bay (AK)</option>
               <option value="1461">USA - Pueblo (CO)</option>
               <option value="1468">USA - Pullman (WA)</option>
               <option value="1480">USA - Quincy (IL)</option>
               <option value="1487">USA - Raleigh/Durham (NC)</option>
               <option value="1491">USA - Rapid City (SD)</option>
               <option value="1496">USA - Reading (PA)</option>
               <option value="1498">USA - Redding (CA)</option>
               <option value="1499">USA - Redmond (OR)</option>
               <option value="1504">USA - Reno (NV)</option>
               <option value="1509">USA - Rhinelander (WI)</option>
               <option value="1512">USA - Richmond (VA)</option>
               <option value="1522">USA - Roanoke (VA)</option>
               <option value="1524">USA - Rochester (MN)</option>
               <option value="1525">USA - Rochester (NY)</option>
               <option value="1527">USA - Rock Springs (WY)</option>
               <option value="1528">USA - Rockford (IL)</option>
               <option value="1530">USA - Rockland (ME)</option>
               <option value="1531">USA - Rocky Mount - Wilson (NC)</option>
               <option value="1548">USA - Sacramento (CA)</option>
               <option value="1550">USA - Saginaw/Bay City/Midland (MI)</option>
               <option value="1559">USA - Salem (OR)</option>
               <option value="1560">USA - Salinas (CA)</option>
               <option value="1563">USA - Salisbury (MD)</option>
               <option value="1566">USA - Salt Lake City (UT)</option>
               <option value="1574">USA - San Angelo (TX)</option>
               <option value="1575">USA - San Antonio (TX)</option>
               <option value="1577">USA - San Diego - Lindberg Field International (CA)</option>
               <option value="1578">USA - San Francisco - International Airport, SA</option>
               <option value="1581">USA - San Jose (CA)</option>
               <option value="1583">USA - San Luis Obisco (CA)</option>
               <option value="1592">USA - Santa Ana - John Wayne Airport (CA)</option>
               <option value="1593">USA - Santa Barbara (CA)</option>
               <option value="1598">USA - Santa Maria (CA)</option>
               <option value="1600">USA - Santa Rosa (CA)</option>
               <option value="1623">USA - Sarasota/Bradenton (FL)</option>
               <option value="1626">USA - Savannah (GA)</option>
               <option value="1630">USA - Scottsdale (AZ)</option>
               <option value="1631">USA - Seattle/Tacoma (WA)</option>
               <option value="1648">USA - Shenandoah Valley/Stauton (VA)</option>
               <option value="1651">USA - Sheridan (WY)</option>
               <option value="1652">USA - Shreveport, La</option>
               <option value="1655">USA - Sidney (MT)</option>
               <option value="1663">USA - Sioux City IA</option>
               <option value="1664">USA - Sioux Falls (SD)</option>
               <option value="1666">USA - Sitka (AK)</option>
               <option value="1669">USA - Skagway (AK)</option>
               <option value="1683">USA - South Bend (IN)</option>
               <option value="1688">USA - Spokane (WA)</option>
               <option value="1690">USA - Springfield (IL)</option>
               <option value="1691">USA - Springfield (MO)</option>
               <option value="1694">USA - St. Croix</option>
               <option value="1696">USA - St. George (UT)</option>
               <option value="1699">USA - St. Louis (MO) Lambert–St. Louis International Airport</option>
               <option value="1706">USA - St. Thomas</option>
               <option value="1709">USA - State College/Belefonte (PA)</option>
               <option value="1711">USA - Steamboat Springs (CO)</option>
               <option value="1716">USA - Stockton (CA)</option>
               <option value="1724">USA - Sun Valley (ID)</option>
               <option value="1733">USA - Syracuse (NY)</option>
               <option value="1742">USA - Talkeetna (AK)</option>
               <option value="1743">USA - Tallahassee (FL)</option>
               <option value="1746">USA - Tampa - International (FL)</option>
               <option value="1762">USA - Telluride (CO)</option>
               <option value="1772">USA - Terre Haute (IN)</option>
               <option value="1773">USA - Texarkana (AR)</option>
               <option value="1777">USA - Thief River Falls (MN)</option>
               <option value="1782">USA - Thorne Bay (AK)</option>
               <option value="1796">USA - Toledo (OH)</option>
               <option value="1809">USA - Traverse City (MI)</option>
               <option value="1811">USA - Trenton/Princeton (NJ)</option>
               <option value="1813">USA - Tri-Cities Regional (TN) /VA</option>
               <option value="1819">USA - Tucson (AZ)</option>
               <option value="1820">USA - Tulepo (MS)</option>
               <option value="1821">USA - Tulsa (OK)</option>
               <option value="1826">USA - Tuscaloosa (AL)</option>
               <option value="1828">USA - Twin Falls (ID)</option>
               <option value="1829">USA - Tyler (TX)</option>
               <option value="1844">USA - Ukiah (CA)</option>
               <option value="1854">USA - Unalakleet (AK)</option>
               <option value="1860">USA - Upolu Point (HI)</option>
               <option value="1872">USA - Utica (NY) - Oneida County Airport</option>
               <option value="1878">USA - Vail (CO)</option>
               <option value="1880">USA - Valdez (AK)</option>
               <option value="1881">USA - Valdosta (GA)</option>
               <option value="1897">USA - Vernal (UT)</option>
               <option value="1898">USA - Vero Beach/Ft. Pierce (FL)</option>
               <option value="1909">USA - Visalia (CA)</option>
               <option value="1915">USA - Waco (TX)</option>
               <option value="1917">USA - Walla Walla (WA)</option>
               <option value="1925">USA - Washington DC</option>
               <option value="1922">USA - Washington DC - Baltimore Washington International</option>
               <option value="1923">USA - Washington DC - Dulles International</option>
               <option value="1924">USA - Washington DC - Ronald Reagan National</option>
               <option value="1926">USA - Waterloo IA</option>
               <option value="1927">USA - Watertown (SD)</option>
               <option value="1928">USA - Wausau/Stevens Point (WI)</option>
               <option value="1932">USA - Wenatchee (WA)</option>
               <option value="1933">USA - West Palm Beach (FL)</option>
               <option value="1934">USA - West Yellowstone (MT)</option>
               <option value="1939">USA - White Plains (NY)</option>
               <option value="1944">USA - Wichita (KS)</option>
               <option value="1943">USA - Wichita Falls (TX)</option>
               <option value="1949">USA - Wilkes Barre/Scranton (PA)</option>
               <option value="1950">USA - Williamsport (PA)</option>
               <option value="1951">USA - Williston (ND)</option>
               <option value="1952">USA - Wilmington (NC)</option>
               <option value="1959">USA - Wolf Point (MT)</option>
               <option value="1962">USA - Worcester (MA)</option>
               <option value="1963">USA - Worland (WY)</option>
               <option value="1964">USA - Wrangell (AK)</option>
               <option value="1969">USA - Yakima (WA)</option>
               <option value="1970">USA - Yakutat (AK)</option>
               <option value="1981">USA - Yuma (AZ)</option>
               <option value="1570">Uzbekistan - Samarkand - Samarkand International Airport</option>
               <option value="1753">Uzbekistan - Tashkent - International</option>
               <option value="1770">Uzbekistan - Termez (Termes)</option>
               <option value="1862">Uzbekistan - Urgench</option>
               <option value="1446">Vanuatu - Port Vila</option>
               <option value="1610">Vanuatu - Santo</option>
               <option value="1848">Vanuatu - Ulei</option>
               <option value="146">Venezuela - Barcelona</option>
               <option value="291">Venezuela - Caracas - Simón Bolívar International Airport</option>
               <option value="351">Venezuela - Ciudad Guayana</option>
               <option value="1096">Venezuela - Maracaibo - La Chinita International</option>
               <option value="1103">Venezuela - Margerita</option>
               <option value="1463">Venezuela - Puerto Ordaz</option>
               <option value="1863">Venezuela - Uriman</option>
               <option value="1883">Venezuela - Valencia</option>
               <option value="668">Viet Nam - Ho Chi Minh City (Saigon) - Tan Son Nhat International</option>
               <option value="684">Viet Nam - Hue - Phu Bai</option>
               <option value="1552">Viet Nam - Saigon (Ho Chi Minh City) - Tan Son Nhat International</option>
               <option value="643">Vietnam - Hanoi - Noi Bai International Airport</option>
               <option value="163">Virgin Islands (British) - Beef Island - Terrance B. Lettsome</option>
               <option value="1908">Virgin Islands (British) - Virgin Gorda</option>
               <option value="551">Wallis and Futuna Islands - Futuna</option>
               <option value="1918">Wallis and Futuna Islands - Wallis</option>
               <option value="18">Yemen - Aden - Aden International Airport</option>
               <option value="1590">Yemen - Sanaa (Sana&#039;a) - Sana&#039;a International</option>
               <option value="338">Zambia - Chipata</option>
               <option value="904">Zambia - Kitwe</option>
               <option value="1050">Zambia - Lusaka - Lusaka International Airport</option>
               <option value="1153">Zambia - Mfuwe</option>
               <option value="1270">Zambia - N&#039;Dola</option>
               <option value="261">Zimbabwe - Buffalo Range</option>
               <option value="264">Zimbabwe - Bulawayo</option>
               <option value="625">Zimbabwe - Gweru</option>
               <option value="644">Zimbabwe - Harare - Harare International Airport</option>
               <option value="690">Zimbabwe - Hwange National Park</option>
               <option value="1118">Zimbabwe - Masvingo</option>
               <option value="1562">Zimbabwe - Salisbury</option>
               <option value="1902">Zimbabwe - Victoria Falls</option>
            </select>
            </div>
            <div class="form-group">
               <label for="arrival_airport" class="col-sm-4 control-label">Arrival Airport *</label>
               <select id="arrival_airport" name="arrival_airport" class="form-control select2" style="width: 100%;">
                  <option value="0">---Select---</option>
                  <option value="753">Afghanistan - Jalalabad    </option>
                  <option value="834">Afghanistan - Kabul - Khwaja Rawash Airport</option>
                  <option value="1869">Afghanistan - Uruzgan</option>
                  <option value="1788">Albania - Tirana - Rinas</option>
                  <option value="51">Algeria - Algiers, Houari Boumediene Airport</option>
                  <option value="79">Algeria - Annaba</option>
                  <option value="378">Algeria - Constantine</option>
                  <option value="785">Algeria - Jijel</option>
                  <option value="1334">Algeria - Oran (Ouahran)</option>
                  <option value="1366">American Samoa - Pago Pago</option>
                  <option value="74">Andorra - Andorra La Vella - Heliport</option>
                  <option value="179">Angola - Benguela</option>
                  <option value="272">Angola - Cabinda</option>
                  <option value="758">Angola - Jamba</option>
                  <option value="1042">Angola - Luanda - 4 de Fevereiro</option>
                  <option value="1841">Angola - Uige</option>
                  <option value="75">Anguilla - Anguilla</option>
                  <option value="85">Antigua and Barbuda - Antigua, V.C. Bird International</option>
                  <option value="258">Argentina - Buenos Aires</option>
                  <option value="259">Argentina - Buenos Aires, Ezeiza International Airport</option>
                  <option value="260">Argentina - Buenos Aires, Jorge Newbery</option>
                  <option value="384">Argentina - Cordoba</option>
                  <option value="697">Argentina - Iguazu, Cataratas</option>
                  <option value="818">Argentina - Jose De San Martin</option>
                  <option value="824">Argentina - Jujuy - El Cadillal Airport</option>
                  <option value="830">Argentina - Junin</option>
                  <option value="1095">Argentina - Mar del Plata</option>
                  <option value="1138">Argentina - Mendoza</option>
                  <option value="1539">Argentina - Rosario</option>
                  <option value="1565">Argentina - Salta, Gen Belgrano</option>
                  <option value="1576">Argentina - San Carlos de Bariloche</option>
                  <option value="1603">Argentina - Santa Rosa</option>
                  <option value="1870">Argentina - Ushuaia - Islas Malvinas Airport</option>
                  <option value="490">Armenia - Eriwan (Yerevan, Jerevan)</option>
                  <option value="97">Aruba - Aruba - Reina Beatrix International, Oranjestad</option>
                  <option value="1338">Aruba - Oranjestad - Reina Beatrix International</option>
                  <option value="17">Australia - Adelaide</option>
                  <option value="35">Australia - Albany</option>
                  <option value="41">Australia - Albury</option>
                  <option value="54">Australia - Alice Springs</option>
                  <option value="120">Australia - Ayers Rock - Connellan</option>
                  <option value="121">Australia - Ayr</option>
                  <option value="130">Australia - Ballina</option>
                  <option value="132">Australia - Bamaga</option>
                  <option value="207">Australia - Blackwater</option>
                  <option value="231">Australia - Bowen</option>
                  <option value="235">Australia - Brampton Island</option>
                  <option value="246">Australia - Brisbane</option>
                  <option value="249">Australia - Broken Hill</option>
                  <option value="251">Australia - Broome</option>
                  <option value="266">Australia - Bundaberg</option>
                  <option value="270">Australia - Burnie (Wynyard)</option>
                  <option value="274">Australia - Cairns</option>
                  <option value="286">Australia - Canberra - Canberra Airport</option>
                  <option value="294">Australia - Carnarvon</option>
                  <option value="300">Australia - Casino</option>
                  <option value="311">Australia - Ceduna</option>
                  <option value="312">Australia - Cessnock</option>
                  <option value="324">Australia - Charters Towers</option>
                  <option value="356">Australia - Clermont</option>
                  <option value="364">Australia - Coffs Harbour</option>
                  <option value="368">Australia - Collinsville</option>
                  <option value="380">Australia - Coober Pedy</option>
                  <option value="381">Australia - Cooktown</option>
                  <option value="382">Australia - Cooma</option>
                  <option value="402">Australia - Dalby</option>
                  <option value="411">Australia - Darwin</option>
                  <option value="412">Australia - Daydream Island</option>
                  <option value="423">Australia - Derby</option>
                  <option value="430">Australia - Devonport</option>
                  <option value="448">Australia - Dubbo</option>
                  <option value="457">Australia - Dunk Island</option>
                  <option value="462">Australia - Dysart</option>
                  <option value="484">Australia - Emerald</option>
                  <option value="485">Australia - Emerald</option>
                  <option value="495">Australia - Esperance</option>
                  <option value="561">Australia - Geelong</option>
                  <option value="566">Australia - Geraldton</option>
                  <option value="573">Australia - Gladstone</option>
                  <option value="580">Australia - Gold Coast</option>
                  <option value="581">Australia - Goondiwindi</option>
                  <option value="585">Australia - Gove (Nhulunbuy)</option>
                  <option value="597">Australia - Great Keppel Island</option>
                  <option value="606">Australia - Griffith</option>
                  <option value="608">Australia - Groote Eylandt - Alyangula</option>
                  <option value="626">Australia - Gympie</option>
                  <option value="635">Australia - Hamilton</option>
                  <option value="638">Australia - Hamilton Island</option>
                  <option value="655">Australia - Hayman Island</option>
                  <option value="661">Australia - Hervey Bay</option>
                  <option value="666">Australia - Hinchinbrook Island</option>
                  <option value="669">Australia - Hobart</option>
                  <option value="672">Australia - Home Hill</option>
                  <option value="705">Australia - Ingham</option>
                  <option value="706">Australia - Innisfail</option>
                  <option value="767">Australia - Jandakot</option>
                  <option value="825">Australia - Julia Creek</option>
                  <option value="828">Australia - Jundah</option>
                  <option value="841">Australia - Kalgoorlie</option>
                  <option value="856">Australia - Karratha</option>
                  <option value="858">Australia - Karumba</option>
                  <option value="862">Australia - Katherine</option>
                  <option value="890">Australia - King Island</option>
                  <option value="892">Australia - Kingscote</option>
                  <option value="925">Australia - Kowanyama</option>
                  <option value="935">Australia - Kununurra</option>
                  <option value="979">Australia - Launceston</option>
                  <option value="981">Australia - Laverton</option>
                  <option value="985">Australia - Learmouth (Exmouth)</option>
                  <option value="988">Australia - Leinster</option>
                  <option value="992">Australia - Leonora</option>
                  <option value="1008">Australia - Lindeman Island</option>
                  <option value="1012">Australia - Lismore</option>
                  <option value="1015">Australia - Lizard Island</option>
                  <option value="1017">Australia - Lockhart River</option>
                  <option value="1030">Australia - Longreach</option>
                  <option value="1064">Australia - Mackay</option>
                  <option value="1073">Australia - Maitland</option>
                  <option value="1115">Australia - Maryborough</option>
                  <option value="1133">Australia - Meekatharra</option>
                  <option value="1134">Australia - Melbourne - Melbourne Airport (Tullamarine)</option>
                  <option value="1143">Australia - Merimbula</option>
                  <option value="1156">Australia - Middlemount</option>
                  <option value="1164">Australia - Mildura</option>
                  <option value="1206">Australia - Moranbah</option>
                  <option value="1207">Australia - Moree</option>
                  <option value="1212">Australia - Moruya</option>
                  <option value="1224">Australia - Mount Gambier</option>
                  <option value="1225">Australia - Mount Magnet</option>
                  <option value="1226">Australia - Mt. Isa</option>
                  <option value="1260">Australia - Narrabri</option>
                  <option value="1261">Australia - Narrandera</option>
                  <option value="1285">Australia - Newcastle - Belmont</option>
                  <option value="1286">Australia - Newcastle - Williamtown</option>
                  <option value="1289">Australia - Newman</option>
                  <option value="1302">Australia - Noosa</option>
                  <option value="1303">Australia - Norfolk Island</option>
                  <option value="1330">Australia - Olympic Dam</option>
                  <option value="1335">Australia - Orange</option>
                  <option value="1342">Australia - Orpheus Island</option>
                  <option value="1380">Australia - Paraburdoo</option>
                  <option value="1399">Australia - Perth International</option>
                  <option value="1428">Australia - Port Augusta</option>
                  <option value="1432">Australia - Port Hedland</option>
                  <option value="1436">Australia - Port Lincoln</option>
                  <option value="1437">Australia - Port Macquarie</option>
                  <option value="1433">Australia - Portland</option>
                  <option value="1457">Australia - Prosperpine</option>
                  <option value="1475">Australia - Queenstown</option>
                  <option value="1529">Australia - Rockhampton</option>
                  <option value="1629">Australia - Scone</option>
                  <option value="1653">Australia - Shute Harbour</option>
                  <option value="1662">Australia - Singleton</option>
                  <option value="1685">Australia - South Molle Island</option>
                  <option value="1719">Australia - Streaky Bay</option>
                  <option value="1726">Australia - Sunshine Coast</option>
                  <option value="1731">Australia - Sydney - Sydney Airport</option>
                  <option value="1749">Australia - Tamworth</option>
                  <option value="1751">Australia - Taree</option>
                  <option value="1763">Australia - Temora</option>
                  <option value="1767">Australia - Tennant Creek</option>
                  <option value="1784">Australia - Thursday Island</option>
                  <option value="1797">Australia - Tom Price</option>
                  <option value="1798">Australia - Toowoomba</option>
                  <option value="1805">Australia - Townsville</option>
                  <option value="1916">Australia - Wagga</option>
                  <option value="1920">Australia - Warrnambool</option>
                  <option value="1929">Australia - Weipa</option>
                  <option value="1941">Australia - Whitsunday Resort</option>
                  <option value="1942">Australia - Whyalla</option>
                  <option value="1946">Australia - Wickham</option>
                  <option value="1954">Australia - Wiluna</option>
                  <option value="1960">Australia - Wollongong</option>
                  <option value="1961">Australia - Woomera</option>
                  <option value="1966">Australia - Wyndham</option>
                  <option value="595">Austria - Graz</option>
                  <option value="707">Austria - Innsbruck - Kranebitten</option>
                  <option value="905">Austria - Klagenfurt</option>
                  <option value="1009">Austria - Linz - Hoersching</option>
                  <option value="1568">Austria - Salzburg - W.A. Mozart</option>
                  <option value="1947">Austria - Wien (Vienna) - Vienna International</option>
                  <option value="129">Azerbaijan - Baku - Heydar Aliyev International Airport</option>
                  <option value="1251">Azerbaijan - Nakhichevan</option>
                  <option value="346">Bahamas - Chub Cay</option>
                  <option value="541">Bahamas - Freeport - Grand Bahama International Airport</option>
                  <option value="586">Bahamas - Govenors Harbour</option>
                  <option value="588">Bahamas - Grand Bahama International</option>
                  <option value="1112">Bahamas - Marsh Harbour</option>
                  <option value="1264">Bahamas - Nassau</option>
                  <option value="1308">Bahamas - North Eleuthera</option>
                  <option value="1526">Bahamas - Rock Sound</option>
                  <option value="1587">Bahamas - San Salvador</option>
                  <option value="1810">Bahamas - Treasure Cay</option>
                  <option value="127">Bahrain - Bahrain - Bahrain International Airport</option>
                  <option value="149">Bangladesh - Barisal</option>
                  <option value="343">Bangladesh - Chittagong</option>
                  <option value="432">Bangladesh - Dhaka - Zia International Airport</option>
                  <option value="780">Bangladesh - Jessore - Jessore Airport</option>
                  <option value="1732">Bangladesh - Sylhet</option>
                  <option value="244">Barbados - Bridgetown - Grantley Adams International</option>
                  <option value="1172">Belarus - Minsk, International</option>
                  <option value="86">Belgium - Antwerp</option>
                  <option value="253">Belgium - Brussels - Brussels Airport</option>
                  <option value="568">Belgium - Ghent (Gent)</option>
                  <option value="999">Belgium - Liege</option>
                  <option value="173">Belize - Belize City - Philip S.W.Goldson International</option>
                  <option value="390">Benin - Cotonou - Cotonou Cadjehoun Airport</option>
                  <option value="189">Bermuda - Bermuda - L.F. Wade International Airport</option>
                  <option value="1386">Bhutan - Paro</option>
                  <option value="360">Bolivia - Cochabamba</option>
                  <option value="970">Bolivia - La Paz - El Alto</option>
                  <option value="1595">Bolivia - Santa Cruz de la Sierra</option>
                  <option value="1601">Bolivia - Santa Rosa</option>
                  <option value="1219">Bosnia and Herzegovina - Mostar</option>
                  <option value="1621">Bosnia and Herzegovina - Sarajevo</option>
                  <option value="536">Botswana - Francistown</option>
                  <option value="552">Botswana - Gaborone - Sir Seretse Khama International Airport</option>
                  <option value="832">Botswana - Jwaneng</option>
                  <option value="1122">Botswana - Maun</option>
                  <option value="1634">Botswana - Selibi Phikwe</option>
                  <option value="91">Brazil - Aracaju</option>
                  <option value="168">Brazil - Belem - Val de Cans International Airport</option>
                  <option value="175">Brazil - Belo Horizonte - Tancredo Neves International Airport</option>
                  <option value="214">Brazil - Boa Vista</option>
                  <option value="236">Brazil - Brasilia - President Juscelino Kubitschek International</option>
                  <option value="285">Brazil - Campo Grande</option>
                  <option value="395">Brazil - Cuiaba - Marechal Rondon International Airport</option>
                  <option value="398">Brazil - Curitiba - Afonso Pena International Airport</option>
                  <option value="517">Brazil - Florianopolis</option>
                  <option value="520">Brazil - Fortaleza - Pinto Martins Airport</option>
                  <option value="579">Brazil - Goiania, Santa Genoveva Airport</option>
                  <option value="744">Brazil - Jacobina   </option>
                  <option value="756">Brazil - Jales</option>
                  <option value="769">Brazil - Januaria</option>
                  <option value="771">Brazil - Jatai</option>
                  <option value="801">Brazil - Joacaba</option>
                  <option value="802">Brazil - Joao Pessoa - Castro Pinto Airport</option>
                  <option value="811">Brazil - Joinville - Cubatao Airport</option>
                  <option value="823">Brazil - Juiz De Fora - Francisco De Assis Airport</option>
                  <option value="1061">Brazil - Macapa - Alberto Alcolumbre International Airport</option>
                  <option value="1063">Brazil - Maceio - Zumbi dos Palmares International Airport</option>
                  <option value="1085">Brazil - Manaus - Eduardo Gomes International Airport</option>
                  <option value="1194">Brazil - Montenegro</option>
                  <option value="1265">Brazil - Natal - Augusto Severo International Airport</option>
                  <option value="1370">Brazil - Palmas</option>
                  <option value="1441">Brazil - Porto Alegre - Salgado Filho International Airport</option>
                  <option value="1445">Brazil - Porto Velho</option>
                  <option value="1497">Brazil - Recife - Guararapes-Gilberto Freyre International</option>
                  <option value="1516">Brazil - Rio Branco - Plácido de Castro International Airport</option>
                  <option value="1519">Brazil - Rio de Janeiro</option>
                  <option value="1517">Brazil - Rio de Janeiro - Galeao</option>
                  <option value="1518">Brazil - Rio de Janeiro - Santos Dumont</option>
                  <option value="1567">Brazil - Salvador - Salvador International Airport</option>
                  <option value="1602">Brazil - Santa Rosa</option>
                  <option value="1612">Brazil - Sao Luis - Marechal Cunha Machado International</option>
                  <option value="1613">Brazil - Sao Paulo</option>
                  <option value="1614">Brazil - Sao Paulo - Congonhas</option>
                  <option value="1615">Brazil - Sao Paulo - Guarulhos</option>
                  <option value="614">Brazil - Sao Paulo - Guarulhos International</option>
                  <option value="1616">Brazil - Sao Paulo - Viracopos</option>
                  <option value="1769">Brazil - Teresina</option>
                  <option value="1833">Brazil - Uberaba</option>
                  <option value="1834">Brazil - Uberlandia - Eduardo Gomes Airport</option>
                  <option value="1866">Brazil - Urubupunga - Ernesto Pochler Airport</option>
                  <option value="1867">Brazil - Uruguaiana - Ruben Berta Airport</option>
                  <option value="1912">Brazil - Vitoria - Eurico de Aguiar Salles Airport</option>
                  <option value="1802">British Virgin Islands - Tortola</option>
                  <option value="135">Brunei - Bandar Seri Begawan - Brunei International Airport</option>
                  <option value="229">Bulgaria - Bourgas/Burgas</option>
                  <option value="583">Bulgaria - Gorna</option>
                  <option value="760">Bulgaria - Jambol</option>
                  <option value="1546">Bulgaria - Ruse</option>
                  <option value="1656">Bulgaria - Silistra</option>
                  <option value="1680">Bulgaria - Sofia - Vrazhdebna</option>
                  <option value="1752">Bulgaria - Targovishte</option>
                  <option value="1892">Bulgaria - Varna</option>
                  <option value="1903">Bulgaria - Vidin</option>
                  <option value="215">Burkina Faso - Bobo/Dioulasso</option>
                  <option value="1355">Burkina Faso - Ouagadougou</option>
                  <option value="263">Burundi - Bujumbura - Bujumbura International Airport</option>
                  <option value="1406">Cambodia - Phnom Penh - Pochentong</option>
                  <option value="445">Cameroon - Douala</option>
                  <option value="557">Cameroon - Garoua</option>
                  <option value="1106">Cameroon - Maroua</option>
                  <option value="1291">Cameroon - N&#039;Gaoundere</option>
                  <option value="1976">Cameroon - Yaounde</option>
                  <option value="112">Canada - Attawapiskat, NT</option>
                  <option value="223">Canada - Bonaventure, PQ</option>
                  <option value="278">Canada - Calgary - Calgary International Airport</option>
                  <option value="282">Canada - Cambridge Bay</option>
                  <option value="347">Canada - Churchill</option>
                  <option value="416">Canada - Deer Lake/Corner Brook</option>
                  <option value="468">Canada - Edmonton</option>
                  <option value="469">Canada - Edmonton, International</option>
                  <option value="470">Canada - Edmonton, Municipal</option>
                  <option value="513">Canada - Flin Flon</option>
                  <option value="519">Canada - Fort Albert</option>
                  <option value="525">Canada - Fort McMurray</option>
                  <option value="529">Canada - Fort Smith</option>
                  <option value="531">Canada - Fort St. John</option>
                  <option value="540">Canada - Fredericton</option>
                  <option value="556">Canada - Gander</option>
                  <option value="572">Canada - Gillam</option>
                  <option value="582">Canada - Goose Bay</option>
                  <option value="632">Canada - Halifax International</option>
                  <option value="633">Canada - Hall Beach</option>
                  <option value="636">Canada - Hamilton</option>
                  <option value="647">Canada - Harrington Harbour, PQ</option>
                  <option value="709">Canada - Inuvik</option>
                  <option value="713">Canada - Iqaluit (Frobisher Bay)</option>
                  <option value="845">Canada - Kamloops, BC</option>
                  <option value="860">Canada - Kaschechawan, PQ</option>
                  <option value="871">Canada - Kelowna, BC</option>
                  <option value="938">Canada - Kuujjuaq (FortChimo)</option>
                  <option value="939">Canada - Kuujjuarapik</option>
                  <option value="954">Canada - La Grande</option>
                  <option value="946">Canada - Lac Brochet, MB</option>
                  <option value="984">Canada - Leaf Rapids</option>
                  <option value="1019">Canada - London</option>
                  <option value="1189">Canada - Moncton</option>
                  <option value="1201">Canada - Montreal</option>
                  <option value="1202">Canada - Montreal - Dorval (Montréal-Trudeau)</option>
                  <option value="1203">Canada - Montreal - Mirabel</option>
                  <option value="1254">Canada - Nanisivik</option>
                  <option value="1305">Canada - Norman Wells</option>
                  <option value="1351">Canada - Ottawa - Hull</option>
                  <option value="1438">Canada - Port Menier, PQ</option>
                  <option value="1454">Canada - Prince George</option>
                  <option value="1455">Canada - Prince Rupert/Digby Island</option>
                  <option value="1466">Canada - Pukatawagan</option>
                  <option value="1474">Canada - Quebec - Quebec International</option>
                  <option value="1485">Canada - Rainbow Lake, AB</option>
                  <option value="1501">Canada - Regina</option>
                  <option value="1505">Canada - Resolute Bay</option>
                  <option value="1555">Canada - Saint John</option>
                  <option value="1591">Canada - Sandspit</option>
                  <option value="1624">Canada - Saskatoon</option>
                  <option value="1640">Canada - Shamattawa, MB</option>
                  <option value="1676">Canada - Smithers</option>
                  <option value="1684">Canada - South Indian Lake, MB</option>
                  <option value="1693">Canada - St. Augustin, PQ</option>
                  <option value="1697">Canada - St. John&#039;s</option>
                  <option value="1705">Canada - St. Pierre, NF</option>
                  <option value="1771">Canada - Terrace</option>
                  <option value="1775">Canada - The Pas</option>
                  <option value="1781">Canada - Thompson</option>
                  <option value="1783">Canada - Thunder Bay</option>
                  <option value="1801">Canada - Toronto</option>
                  <option value="1799">Canada - Toronto - Billy Bishop Toronto City Airport</option>
                  <option value="1800">Canada - Toronto - Toronto Pearson International Airport</option>
                  <option value="1852">Canada - Umiujaq</option>
                  <option value="1861">Canada - Uranium City</option>
                  <option value="1879">Canada - Val d&#039;Or</option>
                  <option value="1888">Canada - Vancouver - Vancouver International</option>
                  <option value="1901">Canada - Victoria</option>
                  <option value="1914">Canada - Wabush</option>
                  <option value="1937">Canada - Whale Cove, NT</option>
                  <option value="1940">Canada - Whitehorse</option>
                  <option value="1957">Canada - Windsor Ontario</option>
                  <option value="1958">Canada - Winnipeg International</option>
                  <option value="1977">Canada - Yellowknife</option>
                  <option value="1450">Cape Verde - Praia - Nelson Mandela International Airport</option>
                  <option value="1557">Cape Verde - Sal</option>
                  <option value="590">Cayman Islands - Grand Cayman - Owen Roberts International</option>
                  <option value="134">Central African Republic - Bambari</option>
                  <option value="138">Central African Republic - Bangassou</option>
                  <option value="142">Central African Republic - Bangui - M&#039;Poko International Airport</option>
                  <option value="181">Central African Republic - Berberati</option>
                  <option value="200">Central African Republic - Biraro</option>
                  <option value="242">Central African Republic - Bria</option>
                  <option value="295">Central African Republic - Carnot</option>
                  <option value="1352">Central African Republic - Ouadda</option>
                  <option value="4">Chad - Abeche</option>
                  <option value="1222">Chad - Moundou</option>
                  <option value="1269">Chad - N&#039;Djamena</option>
                  <option value="42">Channel Islands - Alderney</option>
                  <option value="617">Channel Islands - Guernsey</option>
                  <option value="778">Channel Islands - Jersey</option>
                  <option value="276">Chile - Calama - El Loa</option>
                  <option value="465">Chile - Easter Island</option>
                  <option value="1470">Chile - Punta Arenas - Presidente Carlos Ibáñez del Campo</option>
                  <option value="1608">Chile - Santiago de Chile - Arturo Merino Benitez</option>
                  <option value="1885">Chile - Valparaiso</option>
                  <option value="164">China - Beijing</option>
                  <option value="165">China - Beijing - Nanyuan Airport</option>
                  <option value="1641">China - Shanghai - Hongqiao</option>
                  <option value="1642">China - Shanghai - Pu Dong</option>
                  <option value="1785">China - Tianjin</option>
                  <option value="152">Colombia - Barranquilla</option>
                  <option value="218">Colombia - Bogota - El Nuevo Dorado International Airport</option>
                  <option value="254">Colombia - Bucaramanga</option>
                  <option value="279">Colombia - Cali</option>
                  <option value="303">Colombia - Cartagena - Rafael Núñez International Airport</option>
                  <option value="1130">Colombia - Medellin - José María Córdova International</option>
                  <option value="1397">Colombia - Pereira</option>
                  <option value="1573">Colombia - San Andres</option>
                  <option value="1605">Colombia - Santa Rosalia</option>
                  <option value="76">Comoros (Comores) - Anjouan - Anjouan Airport</option>
                  <option value="1211">Comoros (Comores) - Moroni - Prince Said Ibrahim</option>
                  <option value="896">Congo (DRC) - Kinshasa - N&#039;Djili</option>
                  <option value="902">Congo (DRC) - Kisangani</option>
                  <option value="1010">Congo (DRC) - Lisala</option>
                  <option value="1049">Congo (DRC) - Lumbumbashi</option>
                  <option value="238">Congo (ROC) - Brazzaville - Maya-Maya Airport</option>
                  <option value="1421">Congo (ROC) - Pointe Noire</option>
                  <option value="1492">Cook Island - Rarotonga</option>
                  <option value="1580">Costa Rica - San Jose</option>
                  <option value="1857">Costa Rica - Upala</option>
                  <option value="7">Cote d&#039;Ivoire - Abidjan</option>
                  <option value="228">Cote d&#039;Ivoire - Bouake</option>
                  <option value="406">Cote d&#039;Ivoire - Daloa</option>
                  <option value="921">Cote d&#039;Ivoire - Korhogo</option>
                  <option value="1083">Cote d&#039;Ivoire - Man</option>
                  <option value="1585">Cote d&#039;Ivoire - San Pedro</option>
                  <option value="1625">Cote d&#039;Ivoire - Sassandra</option>
                  <option value="1973">Côte d&#039;Ivoire - Yamoussoukro</option>
                  <option value="451">Croatia (Hrvatska) - Dubrovnik</option>
                  <option value="1039">Croatia (Hrvatska) - Losinj - Losinj Arpt</option>
                  <option value="1347">Croatia (Hrvatska) - Osijek</option>
                  <option value="1467">Croatia (Hrvatska) - Pula</option>
                  <option value="1514">Croatia (Hrvatska) - Rijeka</option>
                  <option value="1687">Croatia (Hrvatska) - Split</option>
                  <option value="1983">Croatia (Hrvatska) - Zadar</option>
                  <option value="1984">Croatia (Hrvatska) - Zagreb - Zagreb Airport Pleso</option>
                  <option value="348">Cuba - Cienfuegos - Jaime González Airport</option>
                  <option value="653">Cuba - Havana - José Martí International</option>
                  <option value="671">Cuba - Holguin</option>
                  <option value="1607">Cuba - Santiago - Antonio Maceo Airport</option>
                  <option value="1889">Cuba - Varadero</option>
                  <option value="32">Cyprus - Akrotiri - RAF</option>
                  <option value="975">Cyprus - Larnaca</option>
                  <option value="1005">Cyprus - Limassol</option>
                  <option value="1295">Cyprus - Nicosia</option>
                  <option value="1379">Cyprus - Paphos</option>
                  <option value="1449">Czech Republic - Prague - Václav Havel Airport (formerly Ruzyne)</option>
                  <option value="1840">Czech Republic - Uherske Hradiste</option>
                  <option value="2">Denmark - Aarhus</option>
                  <option value="39">Denmark - Alborg</option>
                  <option value="198">Denmark - Billund</option>
                  <option value="383">Denmark - Copenhagen - Copenhagen Airport</option>
                  <option value="493">Denmark - Esbjerg</option>
                  <option value="507">Denmark - Faroer - Vágar Airport</option>
                  <option value="859">Denmark - Karup</option>
                  <option value="1321">Denmark - Odense</option>
                  <option value="1534">Denmark - Roenne</option>
                  <option value="1673">Denmark - Skrydstrup</option>
                  <option value="1678">Denmark - Soenderborg</option>
                  <option value="1780">Denmark - Thisted</option>
                  <option value="438">Djibouti - Djibouti (city) - Djibouti-Ambouli International Airport</option>
                  <option value="1136">Dominica - Melville Hall</option>
                  <option value="299">Dominican Republic - Casa de Campo - La Romana International Airport</option>
                  <option value="1464">Dominican Republic - Puerto Plata</option>
                  <option value="1471">Dominican Republic - Punta Cana - Punta Cana International</option>
                  <option value="473">Dominican Republic - Samana - Samaná El Catey International Airport</option>
                  <option value="1611">Dominican Republic - Santo Domingo</option>
                  <option value="616">Ecuador - Guayaquil - Simon Bolivar</option>
                  <option value="797">Ecuador - Jipijapa</option>
                  <option value="1481">Ecuador - Quito - Mariscal Sucre International Airport</option>
                  <option value="1561">Ecuador - Salinas</option>
                  <option value="11">Egypt - Abu Rudeis</option>
                  <option value="12">Egypt - Abu Simbel</option>
                  <option value="34">Egypt - Al Arish</option>
                  <option value="46">Egypt - Alexandria - Borg el Arab Airport</option>
                  <option value="47">Egypt - Alexandria - El Nhouza Airport</option>
                  <option value="102">Egypt - Assiut</option>
                  <option value="105">Egypt - Aswan - Daraw Airport</option>
                  <option value="275">Egypt - Cairo - Cairo International Airport</option>
                  <option value="480">Egypt - El Minya</option>
                  <option value="688">Egypt - Hurghada International</option>
                  <option value="879">Egypt - Kharga - New Valley</option>
                  <option value="1054">Egypt - Luxor</option>
                  <option value="1109">Egypt - Marsa Alam</option>
                  <option value="1110">Egypt - Marsa Matrah (Marsa Matruh)</option>
                  <option value="1279">Egypt - New Valley - Kharga</option>
                  <option value="1443">Egypt - Port Said</option>
                  <option value="1596">Egypt - Santa Katarina - Mount Sinai</option>
                  <option value="1645">Egypt - Sharm El Sheikh</option>
                  <option value="1668">Egypt - Siwa</option>
                  <option value="1588">El Salvador - San Salvador</option>
                  <option value="1076">Equatorial Guinea - Malabo - Malabo International Airport</option>
                  <option value="100">Eritrea - Asmara - Asmara International</option>
                  <option value="1744">Estonia - Tallinn - Pirita Harbour</option>
                  <option value="1745">Estonia - Tallinn - Ulemiste</option>
                  <option value="16">Ethiopia - Addis Ababa - Bole International Airport</option>
                  <option value="786">Ethiopia - Jijiga</option>
                  <option value="788">Ethiopia - Jimma</option>
                  <option value="795">Ethiopia - Jinka - Baco/Jinka Airport</option>
                  <option value="302">Fiji - Castaway</option>
                  <option value="1246">Fiji - Nadi</option>
                  <option value="1266">Fiji - Nausori</option>
                  <option value="1729">Fiji - Suva - Nausori Airport (Luvuluvu)</option>
                  <option value="486">Finland - Enontekioe</option>
                  <option value="658">Finland - Helsinki - Vantaa</option>
                  <option value="723">Finland - Ivalo</option>
                  <option value="805">Finland - Joensuu</option>
                  <option value="833">Finland - Jyväskylä (Jyvaskyla)</option>
                  <option value="838">Finland - Kajaani</option>
                  <option value="865">Finland - Kauhajoki</option>
                  <option value="872">Finland - Kemi/Tornio</option>
                  <option value="903">Finland - Kittilä</option>
                  <option value="916">Finland - Kokkola/Pietarsaari</option>
                  <option value="936">Finland - Kuopio</option>
                  <option value="940">Finland - Kuusamo</option>
                  <option value="972">Finland - Lappeenranta</option>
                  <option value="1105">Finland - Mariehamn (Maarianhamina)</option>
                  <option value="1159">Finland - Mikkeli</option>
                  <option value="1357">Finland - Oulu</option>
                  <option value="1425">Finland - Pori</option>
                  <option value="1544">Finland - Rovaniemi</option>
                  <option value="1627">Finland - Savonlinna</option>
                  <option value="1633">Finland - Seinaejoki</option>
                  <option value="1677">Finland - Sodankylae</option>
                  <option value="1747">Finland - Tampere</option>
                  <option value="1825">Finland - Turku</option>
                  <option value="1876">Finland - Vaasa</option>
                  <option value="1891">Finland - Varkaus</option>
                  <option value="29">France - Ajaccio</option>
                  <option value="38">France - Albi</option>
                  <option value="81">France - Annecy</option>
                  <option value="117">France - Aurillac</option>
                  <option value="158">France - Bastia</option>
                  <option value="184">France - Bergerac - Roumanieres</option>
                  <option value="195">France - Biarritz</option>
                  <option value="225">France - Bordeaux - Bordeaux Airport</option>
                  <option value="241">France - Brest</option>
                  <option value="281">France - Calvi</option>
                  <option value="288">France - Cannes – Mandelieu Airport</option>
                  <option value="314">France - Chambery</option>
                  <option value="357">France - Clermont Ferrand</option>
                  <option value="435">France - Dinard</option>
                  <option value="436">France - Disneyland Paris</option>
                  <option value="511">France - Figari</option>
                  <option value="543">France - Frejus</option>
                  <option value="605">France - Grenoble</option>
                  <option value="950">France - La Rochelle</option>
                  <option value="967">France - Lannion</option>
                  <option value="1002">France - Lille - Lille Airport</option>
                  <option value="1006">France - Limoges</option>
                  <option value="1034">France - Lorient</option>
                  <option value="1040">France - Lourdes/Tarbes</option>
                  <option value="1058">France - Lyon - Lyon-Saint Exupéry Airport </option>
                  <option value="1111">France - Marseille - Marseille Provence Airport</option>
                  <option value="1146">France - Metz -  Frescaty</option>
                  <option value="1147">France - Metz/Nancy Metz-Nancy-Lorraine</option>
                  <option value="1200">France - Montpellier - Montpellier–Méditerranée Airport</option>
                  <option value="1230">France - Mulhouse</option>
                  <option value="1253">France - Nancy</option>
                  <option value="1256">France - Nantes - Nantes Atlantique Airport</option>
                  <option value="1294">France - Nice - Cote D&#039;Azur Airport</option>
                  <option value="1298">France - Nimes</option>
                  <option value="1382">France - Paris</option>
                  <option value="1383">France - Paris - Charles de Gaulle</option>
                  <option value="1384">France - Paris - Le Bourget</option>
                  <option value="1385">France - Paris - Orly</option>
                  <option value="1391">France - Pau</option>
                  <option value="1398">France - Perpignan</option>
                  <option value="1422">France - Poitiers - Biard</option>
                  <option value="1479">France - Quimper</option>
                  <option value="1503">France - Rennes</option>
                  <option value="1521">France - Roanne</option>
                  <option value="1532">France - Rodez</option>
                  <option value="1553">France - Saint Brieuc</option>
                  <option value="1695">France - St. Etienne</option>
                  <option value="1718">France - Strasbourg - Strasbourg Airport</option>
                  <option value="1804">France - Toulouse - Blagnac Airport</option>
                  <option value="306">French Guiana - Cayenne - Cayenne-Rochambeau Airport</option>
                  <option value="224">French Polynesia - Bora Bora</option>
                  <option value="682">French Polynesia - Huahine</option>
                  <option value="1090">French Polynesia - Manihi</option>
                  <option value="1123">French Polynesia - Maupiti</option>
                  <option value="1205">French Polynesia - Moorea</option>
                  <option value="1484">French Polynesia - Raiatea</option>
                  <option value="1489">French Polynesia - Rangiroa</option>
                  <option value="1830">French Polynesia - Ua Huka</option>
                  <option value="1831">French Polynesia - Ua Pou</option>
                  <option value="1378">French Polynesia (Tahiti) - Papeete - Faaa</option>
                  <option value="960">Gabon - Lambarene</option>
                  <option value="997">Gabon - Libreville</option>
                  <option value="1180">Gabon - Moanda</option>
                  <option value="1221">Gabon - Mouila</option>
                  <option value="1239">Gabon - Mvengue</option>
                  <option value="1430">Gabon - Port Gentil</option>
                  <option value="1362">Gabon/Loyautte - Oyem</option>
                  <option value="143">Gambia - Banjul - Banjul International Airport (Yundum International)</option>
                  <option value="1755">Georgia - Tbilisi - Novo Alexeyevka</option>
                  <option value="114">Germany - Augsburg - Augsbur gAirport</option>
                  <option value="160">Germany - Bayreuth - Bindlacher-Berg</option>
                  <option value="185">Germany - Berlin</option>
                  <option value="186">Germany - Berlin, Schoenefeld</option>
                  <option value="187">Germany - Berlin, Tegel</option>
                  <option value="188">Germany - Berlin, Tempelhof (ceased operating in 2008)</option>
                  <option value="239">Germany - Bremen - Bremen Airport (Flughafen Bremen)</option>
                  <option value="369">Germany - Cologne - Cologne Airport (Flughafen Köln/Bonn)</option>
                  <option value="307">Germany - Cottbus - Cottbus-Drewitz Airport</option>
                  <option value="443">Germany - Dortmund</option>
                  <option value="446">Germany - Dresden - Dresden Airport</option>
                  <option value="453">Germany - Duesseldorf - Düsseldorf International Airport</option>
                  <option value="488">Germany - Erfurt - Erfurt Airport (Flughafen Erfurt)</option>
                  <option value="538">Germany - Frankfurt/Hahn</option>
                  <option value="537">Germany - Frankfurt/Main - Frankfurt Airport (Rhein-Main-Flughafen)</option>
                  <option value="545">Germany - Friedrichshafen - Bodensee-Airport Friedrichshafen</option>
                  <option value="618">Germany - Guettin</option>
                  <option value="634">Germany - Hamburg - Fuhlsbuettel</option>
                  <option value="642">Germany - Hannover</option>
                  <option value="670">Germany - Hof</option>
                  <option value="822">Germany - Juist (island)</option>
                  <option value="853">Germany - Karlsruhe-Baden - Soellingen</option>
                  <option value="883">Germany - Kiel - Holtenau</option>
                  <option value="913">Germany - Köln, Köln/Bonn</option>
                  <option value="989">Germany - Leipzig</option>
                  <option value="1228">Germany - Muenchen (Munich) - Franz Josef Strauss</option>
                  <option value="1229">Germany - Muenster/Osnabrueck</option>
                  <option value="1316">Germany - Nürnberg (Nuremberg)</option>
                  <option value="1363">Germany - Paderborn/Lippstadt</option>
                  <option value="1547">Germany - Saarbruecken</option>
                  <option value="1720">Germany - Stuttgart - Echterdingen</option>
                  <option value="1935">Germany - Westerland, Sylt Airport</option>
                  <option value="1948">Germany - Wiesbaden, Air Base</option>
                  <option value="14">Ghana - Accra - Kotoka International Airport</option>
                  <option value="569">Gibraltar - Gibraltar</option>
                  <option value="94">Greece - Araxos</option>
                  <option value="106">Greece - Athens - Elefthérios Venizélos International Airport</option>
                  <option value="107">Greece - Athens, Hellinikon Airport</option>
                  <option value="318">Greece - Chania</option>
                  <option value="337">Greece - Chios</option>
                  <option value="387">Greece - Corfu</option>
                  <option value="659">Greece - Heraklion</option>
                  <option value="839">Greece - Kalamata</option>
                  <option value="855">Greece - Karpathos</option>
                  <option value="867">Greece - Kavalla</option>
                  <option value="922">Greece - Kos</option>
                  <option value="1240">Greece - Mykonos</option>
                  <option value="1244">Greece - Mytilene (Lesbos)</option>
                  <option value="1268">Greece - Naxos - Naxos Airport</option>
                  <option value="1453">Greece - Preveza/Lefkas</option>
                  <option value="1510">Greece - Rhodos</option>
                  <option value="1564">Greece - Saloniki</option>
                  <option value="1571">Greece - Samos</option>
                  <option value="1671">Greece - Skiathos</option>
                  <option value="1776">Greece - Thessaloniki - Makedonia Apt.</option>
                  <option value="1778">Greece - Thira</option>
                  <option value="1985">Greece - Zakynthos</option>
                  <option value="1262">Greenland - Narsarsuaq</option>
                  <option value="1679">Greenland - Soendre Stroemfjord</option>
                  <option value="1858">Greenland - Upernavik - Upernavik Heliport</option>
                  <option value="1874">Greenland - Uummannaq</option>
                  <option value="604">Grenada - Grenada - Point Salines Airport also Maurice Bishop</option>
                  <option value="156">Guadeloupe - Basse-Terre - Pointe-à-Pitre International Airport</option>
                  <option value="1420">Guadeloupe - Pointe a Pitre</option>
                  <option value="23">Guam - Agana (Hagåtña)</option>
                  <option value="612">Guam - Guam</option>
                  <option value="628">Guam - Hagåtña - Guam International Airport</option>
                  <option value="615">Guatemala - Guatemala City - La Aurora International Airport</option>
                  <option value="375">Guinea - Conakry - Conakry International Airport</option>
                  <option value="943">Guinea - Labe</option>
                  <option value="205">Guinea-Bissau - Bissau - Osvaldo Vieiro International Airport</option>
                  <option value="565">Guyana - Georgetown - Cheddi Jagan International Airport</option>
                  <option value="742">Haiti - Jacmel   </option>
                  <option value="776">Haiti - Jeremie - Jeremie Airport</option>
                  <option value="1427">Haiti - Port au Prince</option>
                  <option value="831">Honduras - Juticalpa</option>
                  <option value="1523">Honduras - Roatan</option>
                  <option value="1586">Honduras - San Pedro Sula</option>
                  <option value="1604">Honduras - Santa Rosa, Copan</option>
                  <option value="1758">Honduras - Tegucigalpa</option>
                  <option value="1873">Honduras - Utila</option>
                  <option value="675">Hong Kong - Hong Kong - Chek Lap Kok</option>
                  <option value="674">Hong Kong - Hong Kong - International Airport (HKIA)</option>
                  <option value="257">Hungary - Budapest - Budapest Ferihegy International Airport</option>
                  <option value="471">Iceland - Egilsstadir</option>
                  <option value="1508">Iceland - Reykjavik - Keflavik International</option>
                  <option value="1507">Iceland - Reykjavik - Metropolitan Area</option>
                  <option value="27">India - Ahmedabad</option>
                  <option value="69">India - Amritsar</option>
                  <option value="71">India - Anand</option>
                  <option value="124">India - Bagdogra</option>
                  <option value="137">India - Bangalore</option>
                  <option value="150">India - Baroda</option>
                  <option value="171">India - Belgaum</option>
                  <option value="193">India - Bhopal</option>
                  <option value="194">India - Bhubaneswar</option>
                  <option value="221">India - Bombay (Mumbai) - Chhatrapati Shivaji International</option>
                  <option value="277">India - Calcutta (Kolkata) - Netaji Subhas Chandra</option>
                  <option value="280">India - Calicut</option>
                  <option value="316">India - Chandigarh - Chandigarh International Airport</option>
                  <option value="327">India - Chennai (Madras)</option>
                  <option value="361">India - Cochin</option>
                  <option value="365">India - Coimbatore</option>
                  <option value="417">India - Delhi - Indira Gandhi International Airport</option>
                  <option value="578">India - Goa</option>
                  <option value="623">India - Guwahati</option>
                  <option value="693">India - Hyderabad - Rajiv Gandhi International Airport</option>
                  <option value="747">India - Jagdalpur</option>
                  <option value="748">India - Jaipur - Sanganeer</option>
                  <option value="749">India - Jaisalmer   </option>
                  <option value="754">India - Jalandhar</option>
                  <option value="763">India - Jammu - Satwari</option>
                  <option value="764">India - Jamnagar - Govardhanpur</option>
                  <option value="765">India - Jamshedpur - Sonari Airport</option>
                  <option value="781">India - Jeypore - Jeypore Airport</option>
                  <option value="803">India - Jodhpur</option>
                  <option value="816">India - Jorhat - Rowriah Airport</option>
                  <option value="848">India - Kanpur</option>
                  <option value="917">India - Kolkata (Calcutta) - Netaji Subhas Chandra</option>
                  <option value="1044">India - Lucknow</option>
                  <option value="1069">India - Madras (Chennai) - Chennai International Airport</option>
                  <option value="1243">India - Mysore</option>
                  <option value="1249">India - Nagpur</option>
                  <option value="1389">India - Patna</option>
                  <option value="1469">India - Pune</option>
                  <option value="1486">India - Rajkot</option>
                  <option value="1488">India - Ranchi</option>
                  <option value="1692">India - Srinagar</option>
                  <option value="1728">India - Surat</option>
                  <option value="1779">India - Thiruvananthapuram</option>
                  <option value="1789">India - Tiruchirapally</option>
                  <option value="1836">India - Udaipur - Dabok Airport</option>
                  <option value="1890">India - Varanasi</option>
                  <option value="119">Indonesia - Ayawasi</option>
                  <option value="136">Indonesia - Bandung - Husein Sastranegara International Airport</option>
                  <option value="420">Indonesia - Denpasar/Bali</option>
                  <option value="750">Indonesia - Jakarta - Halim Perdana Kusuma</option>
                  <option value="751">Indonesia - Jakarta - Metropolitan Area</option>
                  <option value="752">Indonesia - Jakarta - Soekarno-Hatta International</option>
                  <option value="759">Indonesia  - Jambi - Sultan Taha Syarifudn</option>
                  <option value="773">Indonesia - Jayapura - Sentani</option>
                  <option value="1139">Indonesia - Manado</option>
                  <option value="1129">Indonesia - Medan - Kualanamu International</option>
                  <option value="1128">Indonesia - Medan - Polania Int&#039;l (now Soewondo AFB)</option>
                  <option value="1727">Indonesia - Surabaya - Juanda</option>
                  <option value="1787">Indonesia - Tioman</option>
                  <option value="1842">Indonesia - Ujung Pandang - Hasanudin Airport</option>
                  <option value="3">Iran - Abadan</option>
                  <option value="1759">Iran - Tehran (Teheran) - Mehrabad</option>
                  <option value="1864">Iran - Urmiehm (Orumieh)</option>
                  <option value="123">Iraq - Bagdad - Baghdad International Airport</option>
                  <option value="155">Iraq - Basra, Basrah</option>
                  <option value="899">Iraq - Kirkuk</option>
                  <option value="1220">Iraq - Mosul</option>
                  <option value="388">Ireland - Cork</option>
                  <option value="442">Ireland - Donegal (Carrickfin)</option>
                  <option value="449">Ireland - Dublin - Dublin International Airport</option>
                  <option value="555">Ireland - Galway</option>
                  <option value="875">Ireland - Kerry County</option>
                  <option value="909">Ireland - Knock</option>
                  <option value="1643">Ireland - Shannon (Limerick)</option>
                  <option value="1675">Ireland - Sligo</option>
                  <option value="475">Israel - Elat</option>
                  <option value="476">Israel - Elat, Ovula</option>
                  <option value="629">Israel - Haifa</option>
                  <option value="779">Israel - Jerusalem - Atarot Airport (closed)</option>
                  <option value="1761">Israel - Tel Aviv - Ben Gurion International</option>
                  <option value="50">Italy - Alghero Sassari</option>
                  <option value="73">Italy - Ancona - Ancona Falconara Airport</option>
                  <option value="148">Italy - Bari</option>
                  <option value="182">Italy - Bergamo/Milan - Orio Al Serio</option>
                  <option value="220">Italy - Bologna</option>
                  <option value="240">Italy - Brescia, Montichiari</option>
                  <option value="245">Italy - Brindisi</option>
                  <option value="273">Italy - Cagliari</option>
                  <option value="305">Italy - Catania</option>
                  <option value="474">Italy - Elba Island, Marina Di Campo</option>
                  <option value="515">Italy - Florence (Firenze) - Peretola Airport</option>
                  <option value="563">Italy - Genoa</option>
                  <option value="961">Italy - Lamezia Terme</option>
                  <option value="962">Italy - Lampedusa</option>
                  <option value="1160">Italy - Milan</option>
                  <option value="1161">Italy - Milan - Linate</option>
                  <option value="1162">Italy - Milan - Malpensa</option>
                  <option value="1163">Italy - Milan - Orio Al Serio</option>
                  <option value="1258">Italy - Naples - Naples Capodichino Airport</option>
                  <option value="1329">Italy - Olbia</option>
                  <option value="1368">Italy - Palermo - Punta Raisi</option>
                  <option value="1377">Italy - Pantelleria</option>
                  <option value="1400">Italy - Perugia</option>
                  <option value="1401">Italy - Pescara</option>
                  <option value="1413">Italy - Pisa - Galileo Galilei</option>
                  <option value="1500">Italy - Reggio Calabria</option>
                  <option value="1515">Italy - Rimini</option>
                  <option value="1535">Italy - Rome</option>
                  <option value="1536">Italy - Rome - Ciampino</option>
                  <option value="1537">Italy - Rome - Fuimicino</option>
                  <option value="1808">Italy - Trapani</option>
                  <option value="1812">Italy - Treviso</option>
                  <option value="1814">Italy - Trieste</option>
                  <option value="1824">Italy - Turin</option>
                  <option value="1895">Italy - Venice - Marco Polo</option>
                  <option value="1900">Italy - Verona</option>
                  <option value="1899">Italy - Verona (Brescia) Montichiari</option>
                  <option value="893">Jamaica - Kingston - Norman Manley</option>
                  <option value="1193">Jamaica - Montego Bay - Sangster International</option>
                  <option value="30">Japan - Akita</option>
                  <option value="64">Japan - Amami</option>
                  <option value="87">Japan - Aomori</option>
                  <option value="330">Japan - Chiba City</option>
                  <option value="548">Japan - Fukuoka</option>
                  <option value="549">Japan - Fukushima - Fukushima Airport</option>
                  <option value="627">Japan - Hachijo Jima</option>
                  <option value="631">Japan - Hakodate</option>
                  <option value="667">Japan - Hiroshima International</option>
                  <option value="716">Japan - Ishigaki - New Ishigaki Airport</option>
                  <option value="835">Japan - Kagoshima</option>
                  <option value="911">Japan - Kobe</option>
                  <option value="912">Japan - Kochi</option>
                  <option value="918">Japan - Komatsu</option>
                  <option value="934">Japan - Kumamoto</option>
                  <option value="937">Japan - Kushiro</option>
                  <option value="942">Japan - Kyoto</option>
                  <option value="1119">Japan - Matsumoto, Nagano</option>
                  <option value="1120">Japan - Matsuyama</option>
                  <option value="1177">Japan - Miyako Jima (Ryuku Islands) - Hirara</option>
                  <option value="1178">Japan - Miyazaki</option>
                  <option value="1210">Japan - Morioka, Hanamaki</option>
                  <option value="1247">Japan - Nagasaki</option>
                  <option value="1248">Japan - Nagoya - Komaki AFB</option>
                  <option value="1297">Japan - Niigata</option>
                  <option value="1325">Japan - Oita</option>
                  <option value="1326">Japan - Okayama</option>
                  <option value="1327">Japan - Okinawa, Ryukyo Island - Naha</option>
                  <option value="1344">Japan - Osaka - Itami</option>
                  <option value="1345">Japan - Osaka - Kansai International Airport</option>
                  <option value="1343">Japan - Osaka, Metropolitan Area</option>
                  <option value="1549">Japan - Sado Shima</option>
                  <option value="1618">Japan - Sapporo</option>
                  <option value="341">Japan - Sapporo - New Chitose Airport</option>
                  <option value="1620">Japan - Sapporo - New Chitose Airport</option>
                  <option value="1619">Japan - Sapporo - Okadama</option>
                  <option value="1635">Japan - Sendai</option>
                  <option value="1741">Japan - Takamatsu</option>
                  <option value="1792">Japan - Tokushima</option>
                  <option value="1793">Japan - Tokyo</option>
                  <option value="1794">Japan - Tokyo - Haneda</option>
                  <option value="1795">Japan - Tokyo - Narita</option>
                  <option value="1806">Japan - Toyama</option>
                  <option value="1832">Japan - Ube</option>
                  <option value="1972">Japan - Yamagata, Junmachi</option>
                  <option value="1980">Japan - Yokohama</option>
                  <option value="68">Jordan - Amman - Amman-Marka International Airport</option>
                  <option value="67">Jordan - Amman - Queen Alia International Airport</option>
                  <option value="90">Jordan - Aqaba</option>
                  <option value="57">Kazakhstan - Almaty (Alma Ata) - Almaty International Airport</option>
                  <option value="103">Kazakhstan - Astana - Astana International Airport</option>
                  <option value="1080">Kenya - Malindi</option>
                  <option value="1187">Kenya - Mombasa - Moi International</option>
                  <option value="1250">Kenya - Nairobi</option>
                  <option value="897">Kiribati - Kiritimati (island) - Cassidy International Airport</option>
                  <option value="703">Korea South - Incheon, Incheon International Airport</option>
                  <option value="941">Kuwait - Kuwait - Kuwait International</option>
                  <option value="203">Kyrgyzstan - Bishkek - Manas International Airport</option>
                  <option value="1513">Latvia - Riga</option>
                  <option value="167">Lebanon - Beirut - Beirut Rafic Hariri International Airport</option>
                  <option value="1116">Lesotho - Maseru - Moshoeshoe International</option>
                  <option value="1191">Liberia - Monrovia - Metropolitan Area</option>
                  <option value="1192">Liberia - Monrovia - Roberts International</option>
                  <option value="178">Libya - Benghazi (Bengasi)</option>
                  <option value="1632">Libya - Sehba</option>
                  <option value="1815">Libya - Tripoli - Tripoli International</option>
                  <option value="1907">Lithuania - Vilnius</option>
                  <option value="1953">Lithuania - Wilna (Vilnius)</option>
                  <option value="1052">Luxembourg - Luxembourg</option>
                  <option value="1324">Macedonia - Ohrid</option>
                  <option value="1672">Macedonia - Skopje</option>
                  <option value="84">Madagascar - Antananarivo (Tanannarive) - Ivato International Airport</option>
                  <option value="1074">Madagascar - Majunga</option>
                  <option value="208">Malawi - Blantyre (Mandala) - Chileka International Airport</option>
                  <option value="1003">Malawi - Lilongwe - Lilongwe International</option>
                  <option value="199">Malaysia - Bintulu</option>
                  <option value="810">Malaysia - Johor Bahru - Sultan Ismail International</option>
                  <option value="923">Malaysia - Kota Kinabalu</option>
                  <option value="930">Malaysia - Kuala Lumpur - International Airport</option>
                  <option value="931">Malaysia - Kuala Lumpur - Sultan Abdul Aziz Shah</option>
                  <option value="932">Malaysia - Kuantan</option>
                  <option value="933">Malaysia - Kuching</option>
                  <option value="945">Malaysia - Labuan</option>
                  <option value="966">Malaysia - Langkawi (islands)</option>
                  <option value="1173">Malaysia - Miri</option>
                  <option value="1393">Malaysia - Penang International</option>
                  <option value="1654">Malaysia - Sibu</option>
                  <option value="1754">Malaysia - Tawau</option>
                  <option value="133">Mali - Bamako - Bamako-Sénou International Airport</option>
                  <option value="1046">Malta - Luga</option>
                  <option value="757">Marshall Islands - Jaluit Island  </option>
                  <option value="521">Martinique - Fort de France - Martinique Aimé Césaire International</option>
                  <option value="1311">Mauritania - Nouadhibou</option>
                  <option value="1312">Mauritania - Nouakchott</option>
                  <option value="1989">Mauritania - Zouerate</option>
                  <option value="1124">Mauritius - Mauritius - S.Seewoosagur Ram International</option>
                  <option value="1533">Mauritius - Rodrigues Island</option>
                  <option value="463">Mayotte - Dzaoudzi</option>
                  <option value="13">Mexico - Acapulco</option>
                  <option value="26">Mexico - Aguascaliente</option>
                  <option value="287">Mexico - Cancun</option>
                  <option value="334">Mexico - Chichen Itza</option>
                  <option value="336">Mexico - Chihuahua - Gen Fierro Villalobos</option>
                  <option value="350">Mexico - Ciudad Del Carmen</option>
                  <option value="352">Mexico - Ciudad Juarez</option>
                  <option value="353">Mexico - Ciudad Obregon</option>
                  <option value="354">Mexico - Ciudad Victoria</option>
                  <option value="366">Mexico - Colima</option>
                  <option value="392">Mexico - Cozmel</option>
                  <option value="396">Mexico - Culiacan</option>
                  <option value="610">Mexico - Guadalajara</option>
                  <option value="660">Mexico - Hermosillo - Gen. Pesqueira Garcia</option>
                  <option value="683">Mexico - Huatulco</option>
                  <option value="724">Mexico - Ixtapa/Zihuatenejo</option>
                  <option value="755">Mexico - Jalapa</option>
                  <option value="971">Mexico - La Paz - Leon</option>
                  <option value="983">Mexico - Lazaro Cardenas</option>
                  <option value="991">Mexico - Leon</option>
                  <option value="1033">Mexico - Loreto</option>
                  <option value="1036">Mexico - Los Cabos</option>
                  <option value="1037">Mexico - Los Mochis</option>
                  <option value="1092">Mexico - Manzanillo</option>
                  <option value="1126">Mexico - Mazatlan</option>
                  <option value="1141">Mexico - Merida</option>
                  <option value="1148">Mexico - Mexicali</option>
                  <option value="1150">Mexico - Mexico City - Atizapan</option>
                  <option value="1151">Mexico - Mexico City - Juarez International</option>
                  <option value="1149">Mexico - Mexico City - Mexico City International Airport</option>
                  <option value="1152">Mexico - Mexico City - Santa Lucia</option>
                  <option value="1168">Mexico - Minatitlan</option>
                  <option value="1197">Mexico - Monterrey - Aeropuerto Del Norte</option>
                  <option value="1196">Mexico - Monterrey - Gen. Mariano Escobedo</option>
                  <option value="1208">Mexico - Morelia</option>
                  <option value="1317">Mexico - Nuevo Laredo</option>
                  <option value="1320">Mexico - Oaxaca - Xoxocotlan</option>
                  <option value="1460">Mexico - Puebla</option>
                  <option value="1462">Mexico - Puerto Escondido</option>
                  <option value="1465">Mexico - Puerto Vallarta</option>
                  <option value="1579">Mexico - San Jose Cabo</option>
                  <option value="1584">Mexico - San Luis Potosi</option>
                  <option value="1606">Mexico - Santa Rosalia</option>
                  <option value="1748">Mexico - Tampico - Gen. F. Javier Mina</option>
                  <option value="1786">Mexico - Tijuana - Rodriguez</option>
                  <option value="1827">Mexico - Tuxtla Gutierrez</option>
                  <option value="1865">Mexico - Uruapan</option>
                  <option value="1896">Mexico - Veracruz</option>
                  <option value="1906">Mexico - Villahermosa</option>
                  <option value="1982">Mexico - Zacatecas</option>
                  <option value="339">Moldova - Chisinau - Chişinău International Airport</option>
                  <option value="1845">Mongolia - Ulaanbaatar - Buyant Uhaa Airport</option>
                  <option value="22">Morocco - Agadir</option>
                  <option value="52">Morocco - Al Hoceima</option>
                  <option value="297">Morocco - Casablanca</option>
                  <option value="298">Morocco - Casablanca, Mohamed V</option>
                  <option value="510">Morocco - Fes</option>
                  <option value="1108">Morocco - Marrakesh - Menara Airport</option>
                  <option value="1353">Morocco - Ouarzazate</option>
                  <option value="1356">Morocco - Oujda</option>
                  <option value="1482">Morocco - Rabat - Rabat-Salé Airport</option>
                  <option value="1750">Morocco - Tangier - Boukhalef</option>
                  <option value="166">Mozambique - Beira</option>
                  <option value="1094">Mozambique - Maputo - Maputo International</option>
                  <option value="1088">Myanmar - Mandalay - Mandalay-Annisaton Airport</option>
                  <option value="1490">Myanmar - Rangoon (Yangon) - Mingaladon</option>
                  <option value="1975">Myanmar - Yangon (Rangoon) - Mingaladon</option>
                  <option value="864">Namibia - Katima Mulilo/Mpacha</option>
                  <option value="870">Namibia - Keetmanshoop</option>
                  <option value="1045">Namibia - Luederitz</option>
                  <option value="1185">Namibia - Mokuti</option>
                  <option value="1332">Namibia - Ondangwa</option>
                  <option value="1337">Namibia - Oranjemund</option>
                  <option value="1545">Namibia - Rundu</option>
                  <option value="1730">Namibia - Swakopmund</option>
                  <option value="1818">Namibia - Tsumeb</option>
                  <option value="1955">Namibia - Windhoek - Eros</option>
                  <option value="1956">Namibia - Windhoek - Hosea Kutako International</option>
                  <option value="766">Nepal - Janakpur</option>
                  <option value="798">Nepal - Jiri</option>
                  <option value="813">Nepal - Jomsom</option>
                  <option value="827">Nepal - Jumla</option>
                  <option value="863">Nepal - Kathmandu - Tribhuvan International Airport</option>
                  <option value="70">Netherlands - Amsterdam - Amsterdam Airport Schiphol</option>
                  <option value="418">Netherlands - Den Haag (The Hague)</option>
                  <option value="472">Netherlands - Eindhoven</option>
                  <option value="607">Netherlands - Groningen - Eelde</option>
                  <option value="990">Netherlands - Lelystad</option>
                  <option value="1060">Netherlands - Maastricht/Aachen</option>
                  <option value="1543">Netherlands - Rotterdam</option>
                  <option value="1837">Netherlands - Uden - Volkel Airport</option>
                  <option value="222">Netherlands Antilles - Bonaire</option>
                  <option value="397">Netherlands Antilles - Curacao - Curaçao International Airport</option>
                  <option value="1702">Netherlands Antilles - St. Marteen</option>
                  <option value="698">New Caledonia - Ile des Pins</option>
                  <option value="699">New Caledonia - Ile Ouen</option>
                  <option value="1101">New Caledonia - Mare</option>
                  <option value="1313">New Caledonia - Noumea</option>
                  <option value="1803">New Caledonia - Touho</option>
                  <option value="113">New Zealand - Auckland - Auckland International Airport</option>
                  <option value="209">New Zealand - Blenheim</option>
                  <option value="345">New Zealand - Christchurch</option>
                  <option value="456">New Zealand - Dunedin</option>
                  <option value="637">New Zealand - Hamilton</option>
                  <option value="702">New Zealand - Incercargill</option>
                  <option value="710">New Zealand - Invercargill</option>
                  <option value="1166">New Zealand - Milford Sound</option>
                  <option value="1223">New Zealand - Mount Cook</option>
                  <option value="1271">New Zealand - Nelson</option>
                  <option value="1372">New Zealand - Palmerston North</option>
                  <option value="1476">New Zealand - Queenstown</option>
                  <option value="1542">New Zealand - Rotorua</option>
                  <option value="1756">New Zealand - Te Anau</option>
                  <option value="1931">New Zealand - Wellington</option>
                  <option value="1936">New Zealand - Whakatane</option>
                  <option value="1938">New Zealand - Whangarei</option>
                  <option value="1084">Nicaragua - Managua - Augusto C Sandino</option>
                  <option value="21">Niger - Agades</option>
                  <option value="95">Niger - Arlit</option>
                  <option value="1097">Niger - Maradi</option>
                  <option value="1293">Niger - Niamey</option>
                  <option value="1988">Niger - Zinder</option>
                  <option value="10">Nigeria - Abuja - Nnamdi Azikiwe International Airport</option>
                  <option value="817">Nigeria - Jos</option>
                  <option value="847">Nigeria - Kano</option>
                  <option value="953">Nigeria - Lagos - Murtala Muhammed Airport</option>
                  <option value="1431">Nigeria - Port Harcourt</option>
                  <option value="1473">North Korea - Pyongyang - Sunan International Airport</option>
                  <option value="1556">Northern Mariana Islands - Saipan</option>
                  <option value="44">Norway - Alesund</option>
                  <option value="59">Norway - Alta</option>
                  <option value="147">Norway - Bardufoss</option>
                  <option value="183">Norway - Bergen</option>
                  <option value="216">Norway - Bodo</option>
                  <option value="248">Norway - Broennoeysund</option>
                  <option value="499">Norway - Evenes</option>
                  <option value="518">Norway - Floro</option>
                  <option value="639">Norway - Hammerfest</option>
                  <option value="652">Norway - Haugesund</option>
                  <option value="898">Norway - Kirkenes</option>
                  <option value="927">Norway - Kristiansand</option>
                  <option value="929">Norway - Kristiansund</option>
                  <option value="959">Norway - Lakselv</option>
                  <option value="1349">Norway - Oslo - Fornebu</option>
                  <option value="1348">Norway - Oslo - Oslo Airport, Gardermoen</option>
                  <option value="1350">Norway - Oslo - Sandefjord</option>
                  <option value="1681">Norway - Sogndal</option>
                  <option value="1710">Norway - Stavanger</option>
                  <option value="1816">Norway - Tromsoe</option>
                  <option value="1817">Norway - Trondheim</option>
                  <option value="1235">Oman - Muscat - Seeb</option>
                  <option value="1558">Oman - Salalah</option>
                  <option value="126">Pakistan - Bahawalpur</option>
                  <option value="144">Pakistan - Bannu</option>
                  <option value="342">Pakistan - Chitral</option>
                  <option value="422">Pakistan - Dera Ismail Khan - Dera Ismail Khan Airport</option>
                  <option value="503">Pakistan - Faisalabad</option>
                  <option value="571">Pakistan - Gilgit</option>
                  <option value="624">Pakistan - Gwadar</option>
                  <option value="694">Pakistan - Hyderabad</option>
                  <option value="717">Pakistan - Islamabad - Benazir Bhutto International Airport</option>
                  <option value="743">Pakistan - Jacobabad</option>
                  <option value="800">Pakistan - Jiwani</option>
                  <option value="852">Pakistan - Karachi - Jinnah International Airport</option>
                  <option value="882">Pakistan - Khuzdar</option>
                  <option value="915">Pakistan - Kohat</option>
                  <option value="955">Pakistan - Lahore</option>
                  <option value="1155">Pakistan - Mianwali</option>
                  <option value="1174">Pakistan - Mirpur</option>
                  <option value="1183">Pakistan - Moenjodaro</option>
                  <option value="1231">Pakistan - Multan</option>
                  <option value="1238">Pakistan - Muzaffarabad</option>
                  <option value="1267">Pakistan - Nawab Shah</option>
                  <option value="1376">Pakistan - Panjgur</option>
                  <option value="1388">Pakistan - Pasni</option>
                  <option value="1402">Pakistan - Peshawar</option>
                  <option value="1477">Pakistan - Quetta</option>
                  <option value="1483">Pakistan - Rahim Yar Khan - Shaikh Zayed International Airport</option>
                  <option value="1494">Pakistan - Rawala Kot</option>
                  <option value="1495">Pakistan - Rawalpindi</option>
                  <option value="1551">Pakistan - Saidu Sharif</option>
                  <option value="1658">Pakistan - Sindhri</option>
                  <option value="1670">Pakistan - Skardu</option>
                  <option value="1721">Pakistan - Sui</option>
                  <option value="1722">Pakistan - Sukkur</option>
                  <option value="1823">Pakistan - Turbat</option>
                  <option value="1987">Pakistan - Zhob</option>
                  <option value="770">Panama - Jaque   </option>
                  <option value="1374">Panama - Panama City - Tocumen International</option>
                  <option value="28">Papua New Guinea - Aiyura</option>
                  <option value="66">Papua New Guinea - Amazon Bay</option>
                  <option value="745">Papua New Guinea - Jacquinot Bay</option>
                  <option value="949">Papua New Guinea - Lae - Lae Nadzab Airport</option>
                  <option value="1089">Papua New Guinea - Manguna</option>
                  <option value="1439">Papua New Guinea - Port Moresby - Jackson Field</option>
                  <option value="104">Paraguay - Asuncion - Asunción International Airport</option>
                  <option value="714">Peru - Iquitos</option>
                  <option value="772">Peru - Jauja</option>
                  <option value="820">Peru - Juanjui</option>
                  <option value="826">Peru - Juliaca</option>
                  <option value="1004">Peru - Lima - J Chavez International</option>
                  <option value="308">Philippines - Cebu City - Mactan-Cebu International</option>
                  <option value="399">Philippines - Cuyo</option>
                  <option value="812">Philippines - Jolo</option>
                  <option value="1066">Philippines - Mactan Island - Nab</option>
                  <option value="1091">Philippines - Manila - Ninoy Aquino International</option>
                  <option value="560">Poland - Gdansk</option>
                  <option value="926">Poland - Krakow (Cracow) - John Paul II International Airport</option>
                  <option value="1448">Poland - Poznan, Lawica</option>
                  <option value="1712">Poland - Stettin</option>
                  <option value="1921">Poland - Warsaw - Frédéric Chopin</option>
                  <option value="506">Portugal - Faro</option>
                  <option value="550">Portugal - Funchal</option>
                  <option value="679">Portugal - Horta</option>
                  <option value="1011">Portugal - Lisbon - Lisboa</option>
                  <option value="1424">Portugal - Ponta Delgada</option>
                  <option value="1440">Portugal - Porto</option>
                  <option value="1444">Portugal - Porto Santo</option>
                  <option value="1597">Portugal - Santa Maria</option>
                  <option value="1768">Portugal - Terceira</option>
                  <option value="60">PR China - Altay</option>
                  <option value="317">PR China - Changchun</option>
                  <option value="319">PR China - Chaoyang, Beijing - Chaoyang Airport</option>
                  <option value="326">PR China - Chengdu - Shuangliu</option>
                  <option value="344">PR China - Chongqing - Jiangbei International Airport</option>
                  <option value="403">PR China - Dalian - Zhoushuizi International Airport</option>
                  <option value="613">PR China - Guangzhou (Canton) - Baiyun International Airport</option>
                  <option value="620">PR China - Guilin - Liangjiang</option>
                  <option value="641">PR China - Hangchow (Hangzhou)</option>
                  <option value="645">PR China - Harbin (Haerbin)</option>
                  <option value="782">PR China - Ji&#039;an</option>
                  <option value="783">PR China - Jiamusi - Jiamusi Airport</option>
                  <option value="784">PR China - Jiayuguan - Jiayuguan Airport</option>
                  <option value="787">PR China - Jilin</option>
                  <option value="789">PR China - Jinan</option>
                  <option value="790">PR China - Jingdezhen</option>
                  <option value="791">PR China - Jinghong - Gasa Airport</option>
                  <option value="792">PR China - Jining</option>
                  <option value="794">PR China - Jinjiang</option>
                  <option value="796">PR China - Jinzhou - Jinzhou Airport</option>
                  <option value="799">PR China - Jiujiang - Jiujiang Lushan Airport</option>
                  <option value="1053">PR China - Luxi - Mangshi</option>
                  <option value="1062">PR China - Macau - Macau International Airport</option>
                  <option value="1255">PR China - Nanning</option>
                  <option value="1478">PR China - Qingdao</option>
                  <option value="1649">PR China - Shenyang</option>
                  <option value="1650">PR China - Shenzhen - Shenzhen Bao&#039;an International</option>
                  <option value="1740">PR China - Taiyuan</option>
                  <option value="1847">PR China - Ulanhot</option>
                  <option value="1868">PR China - Urumqi</option>
                  <option value="1965">PR China - Wuhan</option>
                  <option value="1968">PR China - Xi&#039;an - Xianyang</option>
                  <option value="1967">PR China - Xiamen</option>
                  <option value="1979">PR China - Yichang</option>
                  <option value="25">Puerto Rico - Aguadilla</option>
                  <option value="1125">Puerto Rico - Mayaguez</option>
                  <option value="1423">Puerto Rico - Ponce</option>
                  <option value="1582">Puerto Rico - San Juan - Luis Munoz Marin International Airport</option>
                  <option value="440">Qatar - Doha - Doha International Airport</option>
                  <option value="1554">Reunion - Saint Denis - Roland Garros Airport</option>
                  <option value="255">Romania - Bucharest</option>
                  <option value="256">Romania - Bucharest - Henri Coandă International Airport</option>
                  <option value="379">Romania - Constanta (Constanța) - Constanta Int&#039;l Airport</option>
                  <option value="20">Russia - Adler/Sochi</option>
                  <option value="92">Russia - Arkhangelsk</option>
                  <option value="313">Russia - Chabarovsk (Khabarovsk)</option>
                  <option value="340">Russia - Chita (Tschita)</option>
                  <option value="715">Russia - Irkutsk</option>
                  <option value="842">Russia - Kaliningrad</option>
                  <option value="869">Russia - Kazan - Kazan International Airport</option>
                  <option value="1169">Russia - Mineralnye Vody</option>
                  <option value="1214">Russia - Moscow - Domodedovo</option>
                  <option value="1213">Russia - Moscow - Metropolitan Area</option>
                  <option value="1215">Russia - Moscow - Sheremetyevo</option>
                  <option value="1216">Russia - Moscow - Vnukovo</option>
                  <option value="1233">Russia - Murmansk</option>
                  <option value="1300">Russia - Nizhny Novgorod - Strigino International Airport</option>
                  <option value="1315">Russia - Novosibirsk - Tolmachevo Airport</option>
                  <option value="1541">Russia - Rostov-on-Don - Platov International Airport</option>
                  <option value="1540">Russia - Rostov-on-Don - Rostov-on-Don Airport</option>
                  <option value="1569">Russia - Samara - Kurumoch International Airport</option>
                  <option value="1622">Russia - Saransk - Saransk Airport</option>
                  <option value="1704">Russia - St. Petersburg (Leningrad) - Pulkovo</option>
                  <option value="1839">Russia - Ufa</option>
                  <option value="1843">Russia - Ukhta</option>
                  <option value="1846">Russia - Ulan-Ude</option>
                  <option value="1894">Russia - Velikiye Luki (Welikije Luki)</option>
                  <option value="1971">Russia - Yakutsk</option>
                  <option value="1978">Russia - Yekaterinburg - Koltsovo Airport</option>
                  <option value="886">Rwanda - Kigali - Gregoire Kayibanda</option>
                  <option value="304">Saint Lucia - Castries - George F. L. Charles Airport</option>
                  <option value="1700">Saint Lucia - St. Lucia Hewanorra</option>
                  <option value="1701">Saint Lucia - St. Lucia Vigle</option>
                  <option value="895">Saint Vincent and the Grenadines - Kingstown - E. T. Joshua Airport</option>
                  <option value="1707">Saint Vincent and the Grenadines - St. Vincent</option>
                  <option value="1855">Saint Vincent and the Grenadines - Union Island</option>
                  <option value="88">Samoa - Apia - Faleolo International Airport</option>
                  <option value="1617">Sao Tome &amp; Principe - Sao Tome</option>
                  <option value="431">Saudi Arabia - Dhahran</option>
                  <option value="774">Saudi Arabia - Jeddah - King Abdulaziz International</option>
                  <option value="819">Saudi Arabia - Jouf</option>
                  <option value="878">Saudi Arabia - Khamis Mushayat</option>
                  <option value="1067">Saudi Arabia - Madinah (Medina) - Mohammad Bin Abdulaziz</option>
                  <option value="1132">Saudi Arabia - Medina</option>
                  <option value="1520">Saudi Arabia - Riyadh - King Khaled International</option>
                  <option value="1736">Saudi Arabia - Tabuk</option>
                  <option value="1737">Saudi Arabia - Taif</option>
                  <option value="1974">Saudi Arabia - Yanbu</option>
                  <option value="408">Saudi Arabien - Dammam, King Fahad International</option>
                  <option value="400">Senegal - Dakar - Léopold Sédar Senghor International Airport</option>
                  <option value="172">Serbia - Belgrad (Beograd) - Belgrade Nikola Tesla International</option>
                  <option value="1299">Serbia - Nis</option>
                  <option value="1314">Serbia - Novi Sad</option>
                  <option value="1456">Serbia - Pristina</option>
                  <option value="1071">Seychelles - Mahe - Seychelles International</option>
                  <option value="542">Sierra Leone - Freetown - Freetown-Lungi International Airport</option>
                  <option value="1659">Singapore - Singapore - Changi</option>
                  <option value="1660">Singapore - Singapore - Paya Lebar</option>
                  <option value="1661">Singapore - Singapore - Seletar</option>
                  <option value="237">Slovakia - Bratislava - M. R. Štefánik Airport</option>
                  <option value="1016">Slovenia - Ljubljana - Brnik</option>
                  <option value="1104">Slovenia - Maribor</option>
                  <option value="611">Solomon Islands - Guadalcanal</option>
                  <option value="676">Solomon Islands - Honiara Henderson International</option>
                  <option value="1184">Somalia - Mogadishu</option>
                  <option value="24">South Africa - Aggeneys</option>
                  <option value="45">South Africa - Alexander Bay - Kortdoorn</option>
                  <option value="55">South Africa - Alldays</option>
                  <option value="210">South Africa - Bloemfontein - Bloemfontein Airport</option>
                  <option value="290">South Africa - Cape Town - Cape Town International Airport</option>
                  <option value="459">South Africa - Durban</option>
                  <option value="464">South Africa - East London</option>
                  <option value="479">South Africa - Ellisras</option>
                  <option value="564">South Africa - George</option>
                  <option value="806">South Africa - Johannesburg - OR Tambo International Airport</option>
                  <option value="889">South Africa - Kimberley</option>
                  <option value="908">South Africa - Kleinsee</option>
                  <option value="968">South Africa - Lanseria</option>
                  <option value="1051">South Africa - Lusisiki</option>
                  <option value="1102">South Africa - Margate</option>
                  <option value="1144">South Africa - Messina</option>
                  <option value="1179">South Africa - Mkambati</option>
                  <option value="1218">South Africa - Mossel Bay</option>
                  <option value="1245">South Africa - Mzamba</option>
                  <option value="1272">South Africa - Nelspruit</option>
                  <option value="1273">South Africa - Nelspruit - Kruger Mpumalanga International Airport</option>
                  <option value="1288">South Africa - Newcastle</option>
                  <option value="1354">South Africa - Oudtshoorn</option>
                  <option value="1404">South Africa - Phalaborwa</option>
                  <option value="1410">South Africa - Pietermaritzburg</option>
                  <option value="1411">South Africa - Pietersburg</option>
                  <option value="1412">South Africa - Pilanesberg/Sun City</option>
                  <option value="1416">South Africa - Plettenberg Bay</option>
                  <option value="1429">South Africa - Port Elizabeth</option>
                  <option value="1452">South Africa - Pretoria - Wonderboom Apt.</option>
                  <option value="1511">South Africa - Richards Bay</option>
                  <option value="1665">South Africa - Sishen</option>
                  <option value="1674">South Africa - Skukuza</option>
                  <option value="1689">South Africa - Springbok</option>
                  <option value="1774">South Africa - Thaba&#039;Nchu</option>
                  <option value="1850">South Africa - Ulundi</option>
                  <option value="1853">South Africa - Umtata</option>
                  <option value="1859">South Africa - Upington</option>
                  <option value="1913">South Africa - Vryheid</option>
                  <option value="1919">South Africa - Walvis Bay</option>
                  <option value="1930">South Africa - Welkom</option>
                  <option value="1472">South Korea - Pu San (Busan) - Gimhae International Airport</option>
                  <option value="1636">South Korea - Seoul - Incheon International Airport</option>
                  <option value="1637">South Korea - Seoul - Kimpo</option>
                  <option value="1849">South Korea - Ulsan</option>
                  <option value="821">South Sudan - Juba</option>
                  <option value="53">Spain - Alicante</option>
                  <option value="58">Spain - Almeria</option>
                  <option value="96">Spain - Arrecife/Lanzarote</option>
                  <option value="122">Spain - Badajoz</option>
                  <option value="145">Spain - Barcelona</option>
                  <option value="196">Spain - Bilbao</option>
                  <option value="385">Spain - Cordoba</option>
                  <option value="546">Spain - Fuerteventura</option>
                  <option value="567">Spain - Gerona</option>
                  <option value="587">Spain - Granada</option>
                  <option value="695">Spain - Ibiza</option>
                  <option value="777">Spain - Jerez de la Frontera/Cadiz - La Parra</option>
                  <option value="947">Spain - La Coruna</option>
                  <option value="976">Spain - Las Palmas</option>
                  <option value="1038">Spain - Los Rodeos</option>
                  <option value="1070">Spain - Madrid - Barajas Airport</option>
                  <option value="1072">Spain - Mahon</option>
                  <option value="1077">Spain - Malaga</option>
                  <option value="1232">Spain - Murcia</option>
                  <option value="1359">Spain - Oviedo</option>
                  <option value="1369">Spain - Palma de Mallorca</option>
                  <option value="1502">Spain - Reina Sofia</option>
                  <option value="1506">Spain - Reus</option>
                  <option value="1589">Spain - San Sebastian</option>
                  <option value="1594">Spain - Santa Cruz de la Palma</option>
                  <option value="1599">Spain - Santander</option>
                  <option value="1609">Spain - Santiago de Compostela</option>
                  <option value="1638">Spain - Sevilla</option>
                  <option value="1764">Spain - Tenerife</option>
                  <option value="1766">Spain - Tenerife - Norte Los Rodeos</option>
                  <option value="1765">Spain - Tenerife - Sur Reina Sofia</option>
                  <option value="1882">Spain - Valencia</option>
                  <option value="1884">Spain - Valladolid</option>
                  <option value="1886">Spain - Valverde</option>
                  <option value="1905">Spain - Vigo</option>
                  <option value="1911">Spain - Vitoria</option>
                  <option value="1986">Spain - Zaragoza</option>
                  <option value="370">Sri Lanka - Colombo - Bandaranaike International Airport</option>
                  <option value="746">Sri Lanka - Jaffna - Kankesanturai</option>
                  <option value="861">Sudan - Kassala</option>
                  <option value="881">Sudan - Khartoum - Khartoum International Airport</option>
                  <option value="1381">Suriname - Paramaribo - Zanderij International</option>
                  <option value="1093">Swaziland - Manzini - Matsapha International</option>
                  <option value="584">Sweden - Gothenburg (Göteborg) - Landvetter</option>
                  <option value="657">Sweden - Helsingborg</option>
                  <option value="804">Sweden - Jönköping (Jonkoping) - Axamo Airport</option>
                  <option value="844">Sweden - Kalmar</option>
                  <option value="854">Sweden - Karlstad</option>
                  <option value="901">Sweden - Kiruna</option>
                  <option value="928">Sweden - Kristianstad</option>
                  <option value="998">Sweden - Lidkoeping</option>
                  <option value="1048">Sweden - Lulea</option>
                  <option value="1082">Sweden - Malmo (Malmö) - Malmö Airport</option>
                  <option value="1081">Sweden - Malmo (Malmoe)</option>
                  <option value="1306">Sweden - Norrkoeping</option>
                  <option value="1323">Sweden - Oerebro</option>
                  <option value="1538">Sweden - Ronneby</option>
                  <option value="1714">Sweden - Stockholm - Arlanda</option>
                  <option value="1715">Sweden - Stockholm - Bromma</option>
                  <option value="1713">Sweden - Stockholm Metropolitan Area</option>
                  <option value="1725">Sweden - Sundsvall</option>
                  <option value="1851">Sweden - Umea</option>
                  <option value="1877">Sweden - Vaexjoe</option>
                  <option value="1893">Sweden - Vasteras</option>
                  <option value="1910">Sweden - Visby</option>
                  <option value="61">Switzerland - Altenrhein</option>
                  <option value="153">Switzerland - Basel</option>
                  <option value="190">Switzerland - Berne, Bern-Belp</option>
                  <option value="191">Switzerland - Berne, Railway Service</option>
                  <option value="562">Switzerland - Geneva - Geneva-Cointrin International Airport</option>
                  <option value="1047">Switzerland - Lugano</option>
                  <option value="1990">Switzerland - Zurich (Zürich) - Kloten</option>
                  <option value="43">Syria - Aleppo</option>
                  <option value="407">Syria - Damascus, International</option>
                  <option value="850">Taiwan - Kaohsiung International</option>
                  <option value="1075">Taiwan - Makung</option>
                  <option value="1738">Taiwan - Taipei - Chiang Kai Shek</option>
                  <option value="1739">Taiwan - Taipei - Sung Shan</option>
                  <option value="460">Tajikistan - Dushanbe (Duschanbe) - Dushanbe Airport</option>
                  <option value="93">Tanzania - Arusha</option>
                  <option value="410">Tanzania - Dar es Salam (Daressalam) - Julius Nyerere Int&#039;l</option>
                  <option value="439">Tanzania - Dodoma - Dodoma Airport</option>
                  <option value="887">Tanzania - Kilimadjaro</option>
                  <option value="139">Thailand - Bangkok, Don Muang</option>
                  <option value="140">Thailand - Bangkok, Suvarnabhumi International</option>
                  <option value="329">Thailand - Chiang Mai - Chiang Mai International Airport</option>
                  <option value="651">Thailand - Hatyai (Hat Yai)</option>
                  <option value="1252">Thailand - Nakhon Si Thammarat</option>
                  <option value="1390">Thailand - Pattaya</option>
                  <option value="1408">Thailand - Phuket</option>
                  <option value="1835">Thailand - Ubon Ratchathani - Muang Ubon Airport</option>
                  <option value="1838">Thailand - Udon Thani</option>
                  <option value="1871">Thailand - Utapao (Pattaya)</option>
                  <option value="125">The Bahamas - Bahamas - Lynden Pindling International Airport</option>
                  <option value="1018">Togo - Lome</option>
                  <option value="1318">Tonga - Nuku&#039;alofa - Fua&#039;Amotu International</option>
                  <option value="1442">Trinidad and Tobago - Port of Spain - Piarco International</option>
                  <option value="1628">Trinidad and Tobago - Scarborough - Crown Point International</option>
                  <option value="1791">Trinidad and Tobago - Tobago</option>
                  <option value="437">Tunisia - Djerba</option>
                  <option value="1188">Tunisia - Monastir</option>
                  <option value="1639">Tunisia - Sfax</option>
                  <option value="1822">Tunisia - Tunis - Carthage</option>
                  <option value="15">Turkey - Adana</option>
                  <option value="19">Turkey - Adiyaman</option>
                  <option value="77">Turkey - Ankara</option>
                  <option value="78">Turkey - Ankara - Esenboğa International Airport</option>
                  <option value="83">Turkey - Antalya</option>
                  <option value="217">Turkey - Bodrum - Milas Airport</option>
                  <option value="401">Turkey - Dalaman</option>
                  <option value="419">Turkey - Denizli</option>
                  <option value="491">Turkey - Erzincan</option>
                  <option value="492">Turkey - Erzurum</option>
                  <option value="559">Turkey - Gaziantep</option>
                  <option value="720">Turkey - Istanbul - Istanbul Atatürk Airport</option>
                  <option value="721">Turkey - Istanbul - Sabiha Gokcen</option>
                  <option value="725">Turkey - Izmir</option>
                  <option value="726">Turkey - Izmir - Adnan Menderes Airport</option>
                  <option value="836">Turkey - Kahramanmaras</option>
                  <option value="857">Turkey - Kars</option>
                  <option value="868">Turkey - Kayseri</option>
                  <option value="920">Turkey - Konya</option>
                  <option value="1078">Turkey - Malatya</option>
                  <option value="1098">Turkey - Maras</option>
                  <option value="1100">Turkey - Mardin</option>
                  <option value="1234">Turkey - Mus</option>
                  <option value="1572">Turkey - Samsun</option>
                  <option value="1667">Turkey - Sivas</option>
                  <option value="1760">Turkey - Tekirdag - Corlu</option>
                  <option value="1807">Turkey - Trabzon</option>
                  <option value="1887">Turkey - Van - Ferit Melen</option>
                  <option value="99">Turkmenistan - Ashgabat - Saparmurat Turkmenbashy Int. Airport</option>
                  <option value="487">Uganda - Entebbe - Entebbe International Airport</option>
                  <option value="621">Uganda - Gulu</option>
                  <option value="793">Uganda - Jinja</option>
                  <option value="880">Ukraine - Kharkov</option>
                  <option value="884">Ukraine - Kiev - Borispol</option>
                  <option value="885">Ukraine - Kiev - Zhulhany</option>
                  <option value="1055">Ukraine - Lvov (Lwow, Lemberg)</option>
                  <option value="1296">Ukraine - Nikolaev</option>
                  <option value="1322">Ukraine - Odessa</option>
                  <option value="1657">Ukraine - Simferopol</option>
                  <option value="1875">Ukraine - Uzhgorod</option>
                  <option value="9">United Arab Emirates - Abu Dhabi - Abu Dhabi International</option>
                  <option value="33">United Arab Emirates - Al Ain</option>
                  <option value="49">United Arab Emirates - Alfujairah (Fujairah)</option>
                  <option value="447">United Arab Emirates - Dubai - Dubai International Airport</option>
                  <option value="547">United Arab Emirates - Fujairah, International Airport</option>
                  <option value="1493">United Arab Emirates - Ras al Khaymah (Ras al Khaimah)</option>
                  <option value="1644">United Arab Emirates - Sharjah</option>
                  <option value="5">United Kingdom - Aberdeen</option>
                  <option value="151">United Kingdom - Barra (the famous tidal beach landing)</option>
                  <option value="170">United Kingdom - Belfast - Belfast International Airport</option>
                  <option value="169">United Kingdom - Belfast - George Best Belfast City Airport</option>
                  <option value="177">United Kingdom - Benbecula</option>
                  <option value="201">United Kingdom - Birmingham - Birmingham International Airport</option>
                  <option value="206">United Kingdom - Blackpool</option>
                  <option value="230">United Kingdom - Bournemouth</option>
                  <option value="247">United Kingdom - Bristol</option>
                  <option value="283">United Kingdom - Cambrigde</option>
                  <option value="284">United Kingdom - Campbeltown</option>
                  <option value="292">United Kingdom - Cardiff - Cardiff Airport</option>
                  <option value="391">United Kingdom - Coventry - Baginton</option>
                  <option value="424">United Kingdom - Derry (Londonderry)</option>
                  <option value="441">United Kingdom - Doncaster/Sheffield, Robin Hood International Airport</option>
                  <option value="455">United Kingdom - Dundee</option>
                  <option value="500">United Kingdom - Exeter</option>
                  <option value="502">United Kingdom - Fair Isle (Shetland)</option>
                  <option value="535">United Kingdom - Foula (Shetland)</option>
                  <option value="575">United Kingdom - Glasgow</option>
                  <option value="574">United Kingdom - Glasgow, Prestwick</option>
                  <option value="685">United Kingdom - Humberside</option>
                  <option value="711">United Kingdom - Inverness</option>
                  <option value="718">United Kingdom - Islay</option>
                  <option value="874">United Kingdom - Kent (Manston) Kent International</option>
                  <option value="900">United Kingdom - Kirkwall (Orkney)</option>
                  <option value="965">United Kingdom - Land&#039;s End</option>
                  <option value="987">United Kingdom - Leeds/Bradford</option>
                  <option value="993">United Kingdom - Lerwick/Tingwall (Shetland Islands)</option>
                  <option value="1014">United Kingdom - Liverpool</option>
                  <option value="1021">United Kingdom - London - City Airport</option>
                  <option value="1022">United Kingdom - London - Gatwick</option>
                  <option value="1023">United Kingdom - London - Heathrow</option>
                  <option value="1024">United Kingdom - London - Luton</option>
                  <option value="1025">United Kingdom - London - Stansted</option>
                  <option value="1020">United Kingdom - London Metropolitan Area</option>
                  <option value="1026">United Kingdom - Londonderry - Eglinton</option>
                  <option value="1056">United Kingdom - Lydd - Lydd International Airport</option>
                  <option value="1086">United Kingdom - Manchester</option>
                  <option value="1287">United Kingdom - Newcastle</option>
                  <option value="1278">United Kingdom - Newquay</option>
                  <option value="1309">United Kingdom - Norwich</option>
                  <option value="1310">United Kingdom - Nottingham - East Midlands</option>
                  <option value="1339">United Kingdom - Orkney - Kirkwall</option>
                  <option value="1358">United Kingdom - Out Skerries (Shetland)</option>
                  <option value="1646">United Kingdom - Sheffield, City Airport</option>
                  <option value="1647">United Kingdom - Sheffield, Doncaster, Robin Hood International Airport</option>
                  <option value="1682">United Kingdom - Southampton - Eastleigh</option>
                  <option value="1686">United Kingdom - Southend (London)</option>
                  <option value="1708">United Kingdom - Stansted (London)</option>
                  <option value="1717">United Kingdom - Stornway</option>
                  <option value="1723">United Kingdom - Sumburgh (Shetland)</option>
                  <option value="1757">United Kingdom - Teesside, Durham Tees Valley</option>
                  <option value="1856">United Kingdom - Unst (Shetland Island) - Baltasound Airport</option>
                  <option value="1945">United Kingdom - Wick</option>
                  <option value="1198">Uruguay - Montevideo - Carrasco International Airport</option>
                  <option value="6">USA - Aberdeen (SD)</option>
                  <option value="8">USA - Abilene (TX)</option>
                  <option value="31">USA - Akron (OH)</option>
                  <option value="36">USA - Albany (GA)</option>
                  <option value="37">USA - Albany (NY) - Albany International Airport</option>
                  <option value="40">USA - Albuquerque (NM)</option>
                  <option value="48">USA - Alexandria - Esler Field</option>
                  <option value="56">USA - Allentown (PA)</option>
                  <option value="62">USA - Altoona (PA)</option>
                  <option value="63">USA - Altus</option>
                  <option value="65">USA - Amarillo (TX)</option>
                  <option value="72">USA - Anchorage (AK) - Ted Stevens Anchorage International</option>
                  <option value="80">USA - Ann Arbor (MI)</option>
                  <option value="82">USA - Anniston (AL)</option>
                  <option value="89">USA - Appelton/Neenah/Menasha (WI)</option>
                  <option value="98">USA - Asheville (NC)</option>
                  <option value="101">USA - Aspen, (CO) - Aspen-Pitkin County Airport</option>
                  <option value="108">USA - Athens (GA)</option>
                  <option value="109">USA - Athens (OH)</option>
                  <option value="110">USA - Atlanta (GA) - Hartsfield Atlanta International Airport</option>
                  <option value="111">USA - Atlantic City (NJ) - Atlantic City International</option>
                  <option value="115">USA - Augusta (GA)</option>
                  <option value="116">USA - Augusta (ME) - Augusta State Airport</option>
                  <option value="118">USA - Austin (TX) - Austin-Bergstrom Airport</option>
                  <option value="128">USA - Bakersfield (CA)</option>
                  <option value="131">USA - Baltimore (MD) - Washington International Airport</option>
                  <option value="141">USA - Bangor (ME)</option>
                  <option value="159">USA - Baton Rouge (LA) - Baton Rouge Metropolitan Airport</option>
                  <option value="161">USA - Beaumont/Pt. Arthur (TX)</option>
                  <option value="162">USA - Beckley (WV)</option>
                  <option value="174">USA - Bellingham (WA)</option>
                  <option value="176">USA - Bemidji (MN)</option>
                  <option value="180">USA - Benton Harbour (MI)</option>
                  <option value="192">USA - Bethel (AK)</option>
                  <option value="197">USA - Billings (MT)</option>
                  <option value="202">USA - Birmingham (AL)</option>
                  <option value="204">USA - Bismarck (ND) - Bismarck Municipal Airport</option>
                  <option value="211">USA - Bloomington (IL)</option>
                  <option value="212">USA - Bloomington (IN)</option>
                  <option value="213">USA - Bluefield (WV)</option>
                  <option value="219">USA - Boise (ID) - Boise Air Terminal</option>
                  <option value="226">USA - Borrego Springs (CA)</option>
                  <option value="227">USA - Boston (MA) - General Edward Lawrence Logan</option>
                  <option value="232">USA - Bozeman (MT)</option>
                  <option value="233">USA - Bradford/Warren (PA) /Olean (NY)</option>
                  <option value="234">USA - Brainerd (MN)</option>
                  <option value="243">USA - Bridgeport (CT)</option>
                  <option value="250">USA - Brookings (SD)</option>
                  <option value="252">USA - Brunswick (GA)</option>
                  <option value="262">USA - Buffalo/Niagara Falls (NY)</option>
                  <option value="265">USA - Bullhead City (NV)</option>
                  <option value="267">USA - Burbank (CA)</option>
                  <option value="269">USA - Burlington (VT)</option>
                  <option value="268">USA - Burlington IA</option>
                  <option value="271">USA - Butte (MT)</option>
                  <option value="293">USA - Carlsbad (CA)</option>
                  <option value="296">USA - Carson City (NV)</option>
                  <option value="301">USA - Casper (WY)</option>
                  <option value="309">USA - Cedar City (UT)</option>
                  <option value="310">USA - Cedar Rapids IA</option>
                  <option value="315">USA - Champaign (IL)</option>
                  <option value="320">USA - Charleston (SC)</option>
                  <option value="321">USA - Charleston (WV) - Yeager Airport</option>
                  <option value="322">USA - Charlotte (NC)</option>
                  <option value="323">USA - Charlottesville (VA)</option>
                  <option value="325">USA - Chattanooga (TN)</option>
                  <option value="328">USA - Cheyenne (WY) - Cheyenne Regional Airport</option>
                  <option value="333">USA - Chicago (IL)</option>
                  <option value="331">USA - Chicago (IL), Midway</option>
                  <option value="332">USA - Chicago (IL), O&#039;Hare International Airport</option>
                  <option value="335">USA - Chico (CA)</option>
                  <option value="349">USA - Cincinnati (OH) - Cincinnati/Northern Kentucky Int&#039;l</option>
                  <option value="355">USA - Clarksburg (WV)</option>
                  <option value="359">USA - Cleveland (OH) - Cleveland Hopkins International</option>
                  <option value="358">USA - Cleveland (OH) , Burke Lakefront</option>
                  <option value="362">USA - Cody/Powell/Yellowstone (WY)</option>
                  <option value="363">USA - Coffmann Cove (AK)</option>
                  <option value="367">USA - College Station/Bryan (TX)</option>
                  <option value="371">USA - Colorado Springs (CO)</option>
                  <option value="372">USA - Columbia (SC) - Columbia Metropolitan Airport</option>
                  <option value="373">USA - Columbus (GA)</option>
                  <option value="374">USA - Columbus (OH) - Port Columbus International</option>
                  <option value="376">USA - Concord (CA) - Buchanan Field</option>
                  <option value="377">USA - Concord (NH) - Concord Municipal Airport</option>
                  <option value="386">USA - Cordova (AK)</option>
                  <option value="389">USA - Corpus Christi (TX)</option>
                  <option value="393">USA - Craig (AK)</option>
                  <option value="394">USA - Crescent City (CA)</option>
                  <option value="404">USA - Dallas (TX) , Love Field</option>
                  <option value="405">USA - Dallas/Ft. Worth (TX) - Dallas/Fort Worth International</option>
                  <option value="409">USA - Danville (VA)</option>
                  <option value="413">USA - Dayton (OH)</option>
                  <option value="414">USA - Daytona Beach (FL)</option>
                  <option value="415">USA - Decatur (IL)</option>
                  <option value="421">USA - Denver (CO) - Denver International Airport</option>
                  <option value="425">USA - Des Moines (IA) - Des Moines International Airport</option>
                  <option value="426">USA - Detroit (MI) , Coleman A. Young Municipal</option>
                  <option value="428">USA - Detroit (MI) , Metropolitan Area</option>
                  <option value="427">USA - Detroit (MI) , Wayne County Airport</option>
                  <option value="429">USA - Devils Lake (ND)</option>
                  <option value="434">USA - Dillingham (AK)</option>
                  <option value="444">USA - Dothan (AL)</option>
                  <option value="450">USA - Dubois (PA)</option>
                  <option value="452">USA - Dubuque IA</option>
                  <option value="454">USA - Duluth (MN) /Superior (WI)</option>
                  <option value="458">USA - Durango (CO)</option>
                  <option value="461">USA - Dutch Harbor (AK)</option>
                  <option value="466">USA - Eau Clarie (WI)</option>
                  <option value="482">USA - El Paso (TX) - El Paso International Airport</option>
                  <option value="477">USA - Elkhart (IN)</option>
                  <option value="478">USA - Elko (NV)</option>
                  <option value="481">USA - Elmira (NY)</option>
                  <option value="483">USA - Ely (NV)</option>
                  <option value="489">USA - Erie (PA)</option>
                  <option value="494">USA - Escanaba (MI)</option>
                  <option value="496">USA - Eugene (OR)</option>
                  <option value="497">USA - Eureka (CA)</option>
                  <option value="498">USA - Evansville (IN)</option>
                  <option value="501">USA - Fairbanks (AK)</option>
                  <option value="504">USA - Fargo (ND) (MN)</option>
                  <option value="505">USA - Farmington (NM)</option>
                  <option value="508">USA - Fayetteville (AR)</option>
                  <option value="509">USA - Fayetteville/Ft. Bragg (NC)</option>
                  <option value="512">USA - Flagstaff (AZ)</option>
                  <option value="514">USA - Flint (MI)</option>
                  <option value="516">USA - Florence (SC)</option>
                  <option value="522">USA - Fort Dodge IA</option>
                  <option value="523">USA - Fort Huachuca/Sierra Vista (AZ)</option>
                  <option value="524">USA - Fort Lauderdale/Hollywood (FL)</option>
                  <option value="526">USA - Fort Myers, Metropolitan Area (FL)</option>
                  <option value="527">USA - Fort Myers, Southwest Florida Reg (FL)</option>
                  <option value="528">USA - Fort Riley (KS) - Marshall AAF</option>
                  <option value="530">USA - Fort Smith (AR)</option>
                  <option value="532">USA - Fort Walton Beach (FL)</option>
                  <option value="533">USA - Fort Wayne (IN)</option>
                  <option value="534">USA - Fort Worth (TX) - Dallas/Fort Worth International Airport</option>
                  <option value="539">USA - Franklin/Oil City (PA)</option>
                  <option value="544">USA - Fresno (CA)</option>
                  <option value="553">USA - Gadsden (AL)</option>
                  <option value="554">USA - Gainesville (FL)</option>
                  <option value="570">USA - Gilette (WY)</option>
                  <option value="576">USA - Glasgow (MT)</option>
                  <option value="577">USA - Glendive (MT)</option>
                  <option value="589">USA - Grand Canyon (AZ)</option>
                  <option value="591">USA - Grand Forks (ND)</option>
                  <option value="592">USA - Grand Junction (CO)</option>
                  <option value="593">USA - Grand Rapids (MI)</option>
                  <option value="594">USA - Grand Rapids (MN)</option>
                  <option value="596">USA - Great Falls (MT)</option>
                  <option value="598">USA - Green Bay (WI)</option>
                  <option value="599">USA - Greenbrier/Lewisburg (WV)</option>
                  <option value="600">USA - Greensboro/Winston Salem (NC)</option>
                  <option value="601">USA - Greenville (MS)</option>
                  <option value="602">USA - Greenville (NC)</option>
                  <option value="603">USA - Greenville/Spartanburg (SC)</option>
                  <option value="609">USA - Groton/New London (CT)</option>
                  <option value="619">USA - Gulfport/Biloxi (MS)</option>
                  <option value="622">USA - Gunnison/Crested Butte (CO)</option>
                  <option value="630">USA - Haines (AK)</option>
                  <option value="640">USA - Hancock (MI)</option>
                  <option value="646">USA - Harlingen/South Padre Island (TX)</option>
                  <option value="649">USA - Harrisburg (PA) - Harrisburg International</option>
                  <option value="648">USA - Harrisburg (PA) - Harrisburg Skyport</option>
                  <option value="650">USA - Hartford (CT) /Springfield (MA)</option>
                  <option value="654">USA - Havre (MT)</option>
                  <option value="656">USA - Helena (MT)</option>
                  <option value="662">USA - Hibbing (MN)</option>
                  <option value="663">USA - Hickory (NC)</option>
                  <option value="664">USA - Hilo (HI)</option>
                  <option value="665">USA - Hilton Head Island (SC)</option>
                  <option value="673">USA - Homer (AK)</option>
                  <option value="677">USA - Honolulu (HI) - Honolulu International Airport</option>
                  <option value="678">USA - Hoonah (AK)</option>
                  <option value="680">USA - Houston (TX) , Hobby</option>
                  <option value="681">USA - Houston, TX - George Bush Intercontinental Airport</option>
                  <option value="686">USA - Huntington (WV)</option>
                  <option value="687">USA - Huntsville (AL)</option>
                  <option value="689">USA - Huron (SD)</option>
                  <option value="691">USA - Hyannis (MA)</option>
                  <option value="692">USA - Hydaburg (AK)</option>
                  <option value="696">USA - Idaho Falls (ID)</option>
                  <option value="700">USA - Iliamna (AK)</option>
                  <option value="701">USA - Imperial (CA)</option>
                  <option value="704">USA - Indianapolis (IN) International</option>
                  <option value="708">USA - International Falls (MN)</option>
                  <option value="712">USA - Inykern (CA)</option>
                  <option value="722">USA - Ithaca/Cortland (NY)</option>
                  <option value="728">USA - Jackson (MI) - Reynolds Municipal</option>
                  <option value="731">USA - Jackson (MS) - Hawkins Field   </option>
                  <option value="730">USA - Jackson (MS) - Jackson Internationall</option>
                  <option value="732">USA - Jackson (TN) - Mckellar</option>
                  <option value="727">USA - Jackson Hole (WY)</option>
                  <option value="733">USA - Jackson Hole (WY)</option>
                  <option value="729">USA - Jackson,  MN  </option>
                  <option value="734">USA - Jacksonville (AR)  Little Rock AFB   </option>
                  <option value="735">USA - Jacksonville (FL) - Cecil Field NAS   </option>
                  <option value="738">USA - Jacksonville (FL) - Craig Municipal   </option>
                  <option value="737">USA - Jacksonville (FL) - International</option>
                  <option value="736">USA - Jacksonville (FL) Jacksonville NAS   </option>
                  <option value="739">USA - Jacksonville (IL) - Municipal Airport</option>
                  <option value="740">USA - Jacksonville (NC)</option>
                  <option value="741">USA - Jacksonville (TX)</option>
                  <option value="761">USA - Jamestown (ND)</option>
                  <option value="762">USA - Jamestown (NY)</option>
                  <option value="768">USA - Janesville (WI) - Rock County</option>
                  <option value="775">USA - Jefferson City (MO) - Jefferson Memorial</option>
                  <option value="807">USA - Johnson City (NY) - Binghamton/Endicott/Johnson</option>
                  <option value="808">USA - Johnston Island</option>
                  <option value="809">USA - Johnstown (PA)</option>
                  <option value="814">USA - Jonesboro (AR)  Jonesboro Airport</option>
                  <option value="815">USA - Joplin (MO)</option>
                  <option value="829">USA - Juneau (AK) - Juneau International Airport</option>
                  <option value="837">USA - Kahului (HI)</option>
                  <option value="840">USA - Kalamazoo/Battle Creek (MI)</option>
                  <option value="843">USA - Kalispell (MT)</option>
                  <option value="846">USA - Kamuela (HI)</option>
                  <option value="849">USA - Kansas City (MO) - Kansas City International Airport</option>
                  <option value="851">USA - Kapalua West (HI)</option>
                  <option value="866">USA - Kaunakakai (HI)</option>
                  <option value="873">USA - Kenai (AK)</option>
                  <option value="876">USA - Ketchikan (AK)</option>
                  <option value="877">USA - Key West (FL)</option>
                  <option value="888">USA - Killeem (TX)</option>
                  <option value="891">USA - King Salomon (AK)</option>
                  <option value="894">USA - Kingston (NC)</option>
                  <option value="906">USA - Klamath Fall (OR)</option>
                  <option value="907">USA - Klawock (AK)</option>
                  <option value="910">USA - Knoxville (TN)</option>
                  <option value="914">USA - Kodiak (AK)</option>
                  <option value="919">USA - Kona (HI)</option>
                  <option value="924">USA - Kotzbue (AK)</option>
                  <option value="948">USA - La Crosse (WI)</option>
                  <option value="944">USA - Labouchere Bay (AK)</option>
                  <option value="951">USA - Lafayette (IN)</option>
                  <option value="952">USA - Lafayette, La</option>
                  <option value="956">USA - Lake Charles (LA)</option>
                  <option value="957">USA - Lake Havasu City (AZ)</option>
                  <option value="958">USA - Lake Tahoe (CA)</option>
                  <option value="963">USA - Lanai City (HI)</option>
                  <option value="964">USA - Lancaster (PA)</option>
                  <option value="969">USA - Lansing (MI)</option>
                  <option value="973">USA - Laramie (WY)</option>
                  <option value="974">USA - Laredo (TX)</option>
                  <option value="977">USA - Las Vegas (NV)</option>
                  <option value="978">USA - Latrobe (PA)</option>
                  <option value="980">USA - Laurel/Hattisburg (MS)</option>
                  <option value="982">USA - Lawton (OK)</option>
                  <option value="986">USA - Lebanon (NH)</option>
                  <option value="994">USA - Lewiston (ID)</option>
                  <option value="995">USA - Lewistown (MT)</option>
                  <option value="996">USA - Lexington (KY)</option>
                  <option value="1001">USA - Lihue (HI)</option>
                  <option value="1007">USA - Lincoln (NE)</option>
                  <option value="1013">USA - Little Rock (AR)</option>
                  <option value="1027">USA - Long Beach (CA)</option>
                  <option value="1028">USA - Long Island (AK)</option>
                  <option value="1029">USA - Long Island, Islip (NY) - Mac Arthur</option>
                  <option value="1031">USA - Longview/Kilgore (TX)</option>
                  <option value="1035">USA - Los Angeles (CA) - International</option>
                  <option value="1041">USA - Louisville (KY)</option>
                  <option value="1043">USA - Lubbock (TX)</option>
                  <option value="1057">USA - Lynchburg (VA)</option>
                  <option value="1059">USA - Lyons (KS) - Rice County Municipal</option>
                  <option value="1065">USA - Macon (GA)</option>
                  <option value="1068">USA - Madison (WI) - Dane County Regional Airport</option>
                  <option value="1087">USA - Manchester (NH)</option>
                  <option value="1099">USA - Marathon (FL)</option>
                  <option value="1107">USA - Marquette (MI)</option>
                  <option value="1113">USA - Martha&#039;s Vineyard (MA)</option>
                  <option value="1114">USA - Martinsburg (WV)</option>
                  <option value="1117">USA - Mason City IA</option>
                  <option value="1121">USA - Mattoon (IL)</option>
                  <option value="1127">USA - McAllen (TX)</option>
                  <option value="1131">USA - Medford (OR)</option>
                  <option value="1135">USA - Melbourne (FL)</option>
                  <option value="1137">USA - Memphis (TN)</option>
                  <option value="1140">USA - Merced (CA)</option>
                  <option value="1142">USA - Meridian (MS)</option>
                  <option value="1145">USA - Metlakatla (AK)</option>
                  <option value="1154">USA - Miami (FL)</option>
                  <option value="1157">USA - Midland/Odessa (TX)</option>
                  <option value="1158">USA - Midway Island - Sand Island Field</option>
                  <option value="1165">USA - Miles City (MT)</option>
                  <option value="1167">USA - Milwaukee (WI)</option>
                  <option value="1170">USA - Minneapolis - St. Paul International Airport (MN)</option>
                  <option value="1171">USA - Minot (ND)</option>
                  <option value="1175">USA - Missula (MT)</option>
                  <option value="1176">USA - Mitchell (SD)</option>
                  <option value="1181">USA - Mobile (AL) - Pascagoula (MS)</option>
                  <option value="1182">USA - Modesto (CA)</option>
                  <option value="1186">USA - Moline/Quad Cities (IL)</option>
                  <option value="1190">USA - Monroe (LA)</option>
                  <option value="1195">USA - Monterey (CA)</option>
                  <option value="1199">USA - Montgomery (AL) - Montgomery Regional Airport</option>
                  <option value="1204">USA - Montrose/Tellruide (CO)</option>
                  <option value="1209">USA - Morgantown (WV)</option>
                  <option value="1217">USA - Moses Lake (WA)</option>
                  <option value="1227">USA - Mt. McKinley (AK)</option>
                  <option value="1236">USA - Muscle Shoals (AL)</option>
                  <option value="1237">USA - Muskegon (MI)</option>
                  <option value="1242">USA - Myrtle Beach (SC) - Grand Strand Airport</option>
                  <option value="1241">USA - Myrtle Beach (SC) - Myrtle Beach AFB</option>
                  <option value="1257">USA - Nantucket (MA)</option>
                  <option value="1259">USA - Naples (FL)</option>
                  <option value="1263">USA - Nashville (TN)</option>
                  <option value="1275">USA - New Bern (NC)</option>
                  <option value="1276">USA - New Haven (CT)</option>
                  <option value="1277">USA - New Orleans, La</option>
                  <option value="1280">USA - New York - John F. Kennedy (NY)</option>
                  <option value="1281">USA - New York - LaGuardia (NY)</option>
                  <option value="1282">USA - New York - Newark (NJ)</option>
                  <option value="1283">USA - New York (NY)</option>
                  <option value="1284">USA - Newburgh (NY)</option>
                  <option value="1290">USA - Newport News/Williamsburg (VA)</option>
                  <option value="1292">USA - Niagara Falls International</option>
                  <option value="1301">USA - Nome (AK)</option>
                  <option value="1304">USA - Norfolk/Virginia Beach (VA)</option>
                  <option value="1307">USA - North Bend (OR)</option>
                  <option value="1319">USA - Oakland (CA)</option>
                  <option value="1328">USA - Oklahoma City (OK) - Will Rogers World</option>
                  <option value="1331">USA - Omaha (NE)</option>
                  <option value="1333">USA - Ontario (CA)</option>
                  <option value="1336">USA - Orange County (Santa Ana) (CA)</option>
                  <option value="1341">USA - Orlando - International Airport (FL)</option>
                  <option value="1340">USA - Orlando Metropolitan Area (FL)</option>
                  <option value="1346">USA - Oshkosh (WI)</option>
                  <option value="1360">USA - Owensboro (KY)</option>
                  <option value="1361">USA - Oxnard (CA)</option>
                  <option value="1364">USA - Paducah (KY)</option>
                  <option value="1365">USA - Page/Lake Powell (AZ)</option>
                  <option value="1367">USA - Pakersburg (WV) /Marietta (OH)</option>
                  <option value="1373">USA - Palm Springs (CA)</option>
                  <option value="1371">USA - Palmdale/Lancaster (CA)</option>
                  <option value="1375">USA - Panama City (FL)</option>
                  <option value="1387">USA - Pasco (WA)</option>
                  <option value="1392">USA - Pellston (MI)</option>
                  <option value="1394">USA - Pendelton (OR)</option>
                  <option value="1395">USA - Pensacola (FL)</option>
                  <option value="1396">USA - Peoria/Bloomington (IL)</option>
                  <option value="1403">USA - Petersburg (AK)</option>
                  <option value="1405">USA - Philadelphia (PA) - International</option>
                  <option value="1407">USA - Phoenix (AZ) - Sky Harbor International</option>
                  <option value="1409">USA - Pierre (SD)</option>
                  <option value="1414">USA - Pittsburgh International Airport (PA)</option>
                  <option value="1415">USA - Plattsburgh (NY)</option>
                  <option value="1417">USA - Pocatello (ID)</option>
                  <option value="1426">USA - Port Angeles (WA)</option>
                  <option value="1434">USA - Portland (ME)</option>
                  <option value="1435">USA - Portland International (OR)</option>
                  <option value="1447">USA - Poughkeepsie (NY)</option>
                  <option value="1451">USA - Presque Island (ME)</option>
                  <option value="1458">USA - Providence (RI)</option>
                  <option value="1459">USA - Prudhoe Bay (AK)</option>
                  <option value="1461">USA - Pueblo (CO)</option>
                  <option value="1468">USA - Pullman (WA)</option>
                  <option value="1480">USA - Quincy (IL)</option>
                  <option value="1487">USA - Raleigh/Durham (NC)</option>
                  <option value="1491">USA - Rapid City (SD)</option>
                  <option value="1496">USA - Reading (PA)</option>
                  <option value="1498">USA - Redding (CA)</option>
                  <option value="1499">USA - Redmond (OR)</option>
                  <option value="1504">USA - Reno (NV)</option>
                  <option value="1509">USA - Rhinelander (WI)</option>
                  <option value="1512">USA - Richmond (VA)</option>
                  <option value="1522">USA - Roanoke (VA)</option>
                  <option value="1524">USA - Rochester (MN)</option>
                  <option value="1525">USA - Rochester (NY)</option>
                  <option value="1527">USA - Rock Springs (WY)</option>
                  <option value="1528">USA - Rockford (IL)</option>
                  <option value="1530">USA - Rockland (ME)</option>
                  <option value="1531">USA - Rocky Mount - Wilson (NC)</option>
                  <option value="1548">USA - Sacramento (CA)</option>
                  <option value="1550">USA - Saginaw/Bay City/Midland (MI)</option>
                  <option value="1559">USA - Salem (OR)</option>
                  <option value="1560">USA - Salinas (CA)</option>
                  <option value="1563">USA - Salisbury (MD)</option>
                  <option value="1566">USA - Salt Lake City (UT)</option>
                  <option value="1574">USA - San Angelo (TX)</option>
                  <option value="1575">USA - San Antonio (TX)</option>
                  <option value="1577">USA - San Diego - Lindberg Field International (CA)</option>
                  <option value="1578">USA - San Francisco - International Airport, SA</option>
                  <option value="1581">USA - San Jose (CA)</option>
                  <option value="1583">USA - San Luis Obisco (CA)</option>
                  <option value="1592">USA - Santa Ana - John Wayne Airport (CA)</option>
                  <option value="1593">USA - Santa Barbara (CA)</option>
                  <option value="1598">USA - Santa Maria (CA)</option>
                  <option value="1600">USA - Santa Rosa (CA)</option>
                  <option value="1623">USA - Sarasota/Bradenton (FL)</option>
                  <option value="1626">USA - Savannah (GA)</option>
                  <option value="1630">USA - Scottsdale (AZ)</option>
                  <option value="1631">USA - Seattle/Tacoma (WA)</option>
                  <option value="1648">USA - Shenandoah Valley/Stauton (VA)</option>
                  <option value="1651">USA - Sheridan (WY)</option>
                  <option value="1652">USA - Shreveport, La</option>
                  <option value="1655">USA - Sidney (MT)</option>
                  <option value="1663">USA - Sioux City IA</option>
                  <option value="1664">USA - Sioux Falls (SD)</option>
                  <option value="1666">USA - Sitka (AK)</option>
                  <option value="1669">USA - Skagway (AK)</option>
                  <option value="1683">USA - South Bend (IN)</option>
                  <option value="1688">USA - Spokane (WA)</option>
                  <option value="1690">USA - Springfield (IL)</option>
                  <option value="1691">USA - Springfield (MO)</option>
                  <option value="1694">USA - St. Croix</option>
                  <option value="1696">USA - St. George (UT)</option>
                  <option value="1699">USA - St. Louis (MO) Lambert–St. Louis International Airport</option>
                  <option value="1706">USA - St. Thomas</option>
                  <option value="1709">USA - State College/Belefonte (PA)</option>
                  <option value="1711">USA - Steamboat Springs (CO)</option>
                  <option value="1716">USA - Stockton (CA)</option>
                  <option value="1724">USA - Sun Valley (ID)</option>
                  <option value="1733">USA - Syracuse (NY)</option>
                  <option value="1742">USA - Talkeetna (AK)</option>
                  <option value="1743">USA - Tallahassee (FL)</option>
                  <option value="1746">USA - Tampa - International (FL)</option>
                  <option value="1762">USA - Telluride (CO)</option>
                  <option value="1772">USA - Terre Haute (IN)</option>
                  <option value="1773">USA - Texarkana (AR)</option>
                  <option value="1777">USA - Thief River Falls (MN)</option>
                  <option value="1782">USA - Thorne Bay (AK)</option>
                  <option value="1796">USA - Toledo (OH)</option>
                  <option value="1809">USA - Traverse City (MI)</option>
                  <option value="1811">USA - Trenton/Princeton (NJ)</option>
                  <option value="1813">USA - Tri-Cities Regional (TN) /VA</option>
                  <option value="1819">USA - Tucson (AZ)</option>
                  <option value="1820">USA - Tulepo (MS)</option>
                  <option value="1821">USA - Tulsa (OK)</option>
                  <option value="1826">USA - Tuscaloosa (AL)</option>
                  <option value="1828">USA - Twin Falls (ID)</option>
                  <option value="1829">USA - Tyler (TX)</option>
                  <option value="1844">USA - Ukiah (CA)</option>
                  <option value="1854">USA - Unalakleet (AK)</option>
                  <option value="1860">USA - Upolu Point (HI)</option>
                  <option value="1872">USA - Utica (NY) - Oneida County Airport</option>
                  <option value="1878">USA - Vail (CO)</option>
                  <option value="1880">USA - Valdez (AK)</option>
                  <option value="1881">USA - Valdosta (GA)</option>
                  <option value="1897">USA - Vernal (UT)</option>
                  <option value="1898">USA - Vero Beach/Ft. Pierce (FL)</option>
                  <option value="1909">USA - Visalia (CA)</option>
                  <option value="1915">USA - Waco (TX)</option>
                  <option value="1917">USA - Walla Walla (WA)</option>
                  <option value="1925">USA - Washington DC</option>
                  <option value="1922">USA - Washington DC - Baltimore Washington International</option>
                  <option value="1923">USA - Washington DC - Dulles International</option>
                  <option value="1924">USA - Washington DC - Ronald Reagan National</option>
                  <option value="1926">USA - Waterloo IA</option>
                  <option value="1927">USA - Watertown (SD)</option>
                  <option value="1928">USA - Wausau/Stevens Point (WI)</option>
                  <option value="1932">USA - Wenatchee (WA)</option>
                  <option value="1933">USA - West Palm Beach (FL)</option>
                  <option value="1934">USA - West Yellowstone (MT)</option>
                  <option value="1939">USA - White Plains (NY)</option>
                  <option value="1944">USA - Wichita (KS)</option>
                  <option value="1943">USA - Wichita Falls (TX)</option>
                  <option value="1949">USA - Wilkes Barre/Scranton (PA)</option>
                  <option value="1950">USA - Williamsport (PA)</option>
                  <option value="1951">USA - Williston (ND)</option>
                  <option value="1952">USA - Wilmington (NC)</option>
                  <option value="1959">USA - Wolf Point (MT)</option>
                  <option value="1962">USA - Worcester (MA)</option>
                  <option value="1963">USA - Worland (WY)</option>
                  <option value="1964">USA - Wrangell (AK)</option>
                  <option value="1969">USA - Yakima (WA)</option>
                  <option value="1970">USA - Yakutat (AK)</option>
                  <option value="1981">USA - Yuma (AZ)</option>
                  <option value="1570">Uzbekistan - Samarkand - Samarkand International Airport</option>
                  <option value="1753">Uzbekistan - Tashkent - International</option>
                  <option value="1770">Uzbekistan - Termez (Termes)</option>
                  <option value="1862">Uzbekistan - Urgench</option>
                  <option value="1446">Vanuatu - Port Vila</option>
                  <option value="1610">Vanuatu - Santo</option>
                  <option value="1848">Vanuatu - Ulei</option>
                  <option value="146">Venezuela - Barcelona</option>
                  <option value="291">Venezuela - Caracas - Simón Bolívar International Airport</option>
                  <option value="351">Venezuela - Ciudad Guayana</option>
                  <option value="1096">Venezuela - Maracaibo - La Chinita International</option>
                  <option value="1103">Venezuela - Margerita</option>
                  <option value="1463">Venezuela - Puerto Ordaz</option>
                  <option value="1863">Venezuela - Uriman</option>
                  <option value="1883">Venezuela - Valencia</option>
                  <option value="668">Viet Nam - Ho Chi Minh City (Saigon) - Tan Son Nhat International</option>
                  <option value="684">Viet Nam - Hue - Phu Bai</option>
                  <option value="1552">Viet Nam - Saigon (Ho Chi Minh City) - Tan Son Nhat International</option>
                  <option value="643">Vietnam - Hanoi - Noi Bai International Airport</option>
                  <option value="163">Virgin Islands (British) - Beef Island - Terrance B. Lettsome</option>
                  <option value="1908">Virgin Islands (British) - Virgin Gorda</option>
                  <option value="551">Wallis and Futuna Islands - Futuna</option>
                  <option value="1918">Wallis and Futuna Islands - Wallis</option>
                  <option value="18">Yemen - Aden - Aden International Airport</option>
                  <option value="1590">Yemen - Sanaa (Sana&#039;a) - Sana&#039;a International</option>
                  <option value="338">Zambia - Chipata</option>
                  <option value="904">Zambia - Kitwe</option>
                  <option value="1050">Zambia - Lusaka - Lusaka International Airport</option>
                  <option value="1153">Zambia - Mfuwe</option>
                  <option value="1270">Zambia - N&#039;Dola</option>
                  <option value="261">Zimbabwe - Buffalo Range</option>
                  <option value="264">Zimbabwe - Bulawayo</option>
                  <option value="625">Zimbabwe - Gweru</option>
                  <option value="644">Zimbabwe - Harare - Harare International Airport</option>
                  <option value="690">Zimbabwe - Hwange National Park</option>
                  <option value="1118">Zimbabwe - Masvingo</option>
                  <option value="1562">Zimbabwe - Salisbury</option>
                  <option value="1902">Zimbabwe - Victoria Falls</option>
               </select>
            </div>

            <br>
            <div class="form-horizontal">
               <div class="form-group">
                  <label for="product" class="col-sm-2 control-label">
                  BOX 1 </label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="product[1]" value="" placeholder="Product Name. e.g Shirt, Pant etc">
                  </div>
                  <div class="col-sm-2">
                     <input type="number" class="form-control" name="qty[1]" value="" placeholder="Qty">
                  </div>
               </div>
               <div class="form-group">
                  <label for="product" class="col-sm-2 control-label">
                  BOX 2 </label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="product[2]" value="" placeholder="Product Name. e.g Shirt, Pant etc">
                  </div>
                  <div class="col-sm-2">
                     <input type="number" class="form-control" name="qty[2]" value="" placeholder="Qty">
                  </div>
               </div>
               <div class="form-group">
                  <label for="product" class="col-sm-2 control-label">
                  BOX 3 </label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="product[3]" value="" placeholder="Product Name. e.g Shirt, Pant etc">
                  </div>
                  <div class="col-sm-2">
                     <input type="number" class="form-control" name="qty[3]" value="" placeholder="Qty">
                  </div>
               </div>
               <div class="form-group">
                  <label for="product" class="col-sm-2 control-label">
                  BOX 4 </label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="product[4]" value="" placeholder="Product Name. e.g Shirt, Pant etc">
                  </div>
                  <div class="col-sm-2">
                     <input type="number" class="form-control" name="qty[4]" value="" placeholder="Qty">
                  </div>
               </div>
               <div class="form-group">
                  <label for="product" class="col-sm-2 control-label">
                  BOX 5 </label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" name="product[5]" value="" placeholder="Product Name. e.g Shirt, Pant etc">
                  </div>
                  <div class="col-sm-2">
                     <input type="number" class="form-control" name="qty[5]" value="" placeholder="Qty">
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <button id="submit" class="btn btn-block btn-success"><i
                  class="fa fa-send"></i> <b>Send Order</b></button>
            </div>
            <div>&nbsp;</div>
            <div>&nbsp;</div>
         </div>
      </form>
   </div>
@endsection