@extends('pages.master')

@section('content')
<body style="background-color: black;">
    <style>

      body{
            background-color: black;
            color: white;
        }

       

        h2{
            font-size: 30px;
            color: white;
        }

        a {
            font-size: 18px;
            text-decoration: none;
            color: white;
          
        }

        li{
           margin-top: 15px;
           list-style-type: none 
        }


    </style>
   
        <div class="">

            
          <h2>Popular Locations for Escorts</h2> <hr>
          <p style="font-size: 20px ; color: lightslategray " >Click on a location to start browsing all Escorts in your area!</p>
          <div style="display: grid; grid-template-columns:14% 14% 14% 14% 14% 14% 14% ; " class="">

            <ul>
                <a href="{{ url('new-south-wales-escort') }}" style="text-decoration: none;">
                 <h2 style="font-size: 25px; color: white;">New South Wales</h2></a>
                <li><a href="{{ url('sydney-escorts') }}">Sydney Escort</a></li>
                <li><a href="{{ url('kings-cross-escorts') }}">Kings Cross Escort</a></li>
                <li><a href="{{ url('north-sydney-escorts') }}">North Sydney Escort</a></li>
                <li><a href="{{ url('liverpool-escorts') }}">Liverpool Escort</a></li>
                <li><a href="{{ url('campbelltown-escorts') }}">Campbell town Escort</a></li>
                <li><a href="{{ url('bankstown-escorts') }}">Banks town Escort</a></li>
                <li><a href="{{ url('home-bush-escorts') }}">Home bush Escort</a></li>
  
                <li><a href="{{ url('parramatta-escorts') }}">Parramatta Escort</a></li>
                <li><a href="{{ url('penrith-escorts') }}">Penrith Escort</a></li>
                <li><a href="{{ url('newcastle-escorts') }}">Newcastle Escort</a></li>
                <li><a href="{{ url('wollongong-escorts') }}">Wollongong Escort</a></li>
                <li><a href="{{ url('central-coast-escorts') }}">Central Coast Escort</a></li>
                <li><a href="{{ url('coffs-harbour-escorts') }}">Coffs Harbour Escort</a></li>
                <li><a href="{{ url('forster-escorts') }}">Forster Escort</a></li>
                <li><a href="{{ url('byron-bay-escorts') }}">Byron Bay Escort</a></li>
                <li><a href="{{ url('tweed-heads-escorts') }}">Tweed Heads Escort</a></li>
  
            </ul>





              <ul>  <a href="{{ url('queensland-escort') }}" style="text-decoration: none;">
                          <h2 style="font-size: 25px; color: white;">Queensland Escort</h2>
    </a>
                  <li><a href="{{ url('brisbane-escort') }}">Brisbane Escort</a></li>
                  <li><a href="{{ url('goldcoast-escort') }}">Gold Coast Escort</a></li>
                  <li><a href="{{ url('sunshine-coast-escorts') }}">Sunshine Coast Escort</a></li>
                  <li><a href="{{ url('ipswich-escorts') }}">Ipswich Escort</a></li>
                  <li><a href="{{ url('toowoomba-escorts') }}">Toowoomba Escort</a></li>
                  <li><a href="{{ url('bundaberg-escorts') }}">Bundaberg Escort</a></li>
                  <li><a href="{{ url('gladstone-escorts') }}">Gladstone Escort </a></li>
                  <li><a href="{{ url('rockhampton-escorts') }}">Rockhampton Escort</a></li>
                  <li><a href="{{ url('mackey-escorts') }}">Mackay Escort</a></li>
                  <li><a href="{{ url('townsville-escorts') }}">Townsville Escort</a></li>
                  <li><a href="{{ url('cairns-escorts') }}">Cairns Escort</a></li>
                  <li><a href="{{ url('Mount-isa-escorts') }}">Mount Isa Escort</a></li>
                 
    
              </ul>


              <ul>                    <a href="{{ url('western-australia-escorts') }}" style="text-decoration: none;">
                <h2 style="font-size: 25px; color: white;">Western Australia Escorts</h2></a>
                <li><a href="{{ url('perth-escort') }}">Perth Escort</a></li>
                <li><a href="{{ url('mandurah-escorts') }}">Mandurah Escort</a></li>
                <li><a href="{{ url('port-hedland-escorts') }}">Rockingham escorts</a></li>
                <li><a href="{{ url('bunbury-escorts') }}">Bunbury Escort</a></li>
                <li><a href="{{ url('joondalup-escorts') }}">Joondalup Escort</a></li>
                <li><a href="{{ url('fremantle-escorts') }}">Fremantle Escort</a></li>
                <li><a href="{{ url('kalgoorlie-escorts') }}">Kalgoorlie Escort</a></li>
                <li><a href="{{ url('broome-escorts') }}">Broome Escort</a></li>
                <li><a href="{{ url('port-hedland-escorts') }}">Port Hedland Escort</a></li>
              </ul>  
               







         <ul>   <a href="{{ url('victoria-escort') }}" style="text-decoration: none;">
                  <h2 style="font-size: 25px; color: white;">Victoria Escort</h2></a>
                  <li><a href="{{ url('melbourne-escort') }}">Melbourne Escort</a></li>
                  <li><a href="{{ url('St-kilda-escorts') }}">St Kilda Escort</a></li>
                  <li><a href="{{ url('geelong-escorts') }}">Geelong Escort</a></li>
                  <li><a href="{{ url('ballarat-escorts') }}">Ballarat Escort</a></li>

                  <br>  

                  <a href="{{ url('australian-capital-territory-escorts') }}" style="text-decoration: none;">
                    <h2 style="font-size: 25px; color: white;">Australian Capital Territory</h2></a>
                    <li><a href="{{ url('canberra-escort') }}">Canberra</a></li>

                  
               
              
              </ul>
    
    
              <ul> <a href="{{ url('south-australia-escorts') }}" style="text-decoration: none;">
                  <h2 style="font-size: 25px; color: white;">SA - South Australia</h2></a>
                  <li><a href="{{ url('adelaide-escorts') }}">Adelaide Escort</a></li>
                  <li><a href="{{ url('glenelg-escorts') }}">Glenelg Escort</a></li>
                  <li><a href="{{ url('flagstaff-hill-escorts') }}">Flagstaff Hill Escort</a></li>
               
                 
               
    
    
              </ul>
             
   






              <ul><a href="{{ url('northern-territorya-escort') }}" style="text-decoration: none;">
                   <h2 style="font-size: 25px; color:  white;">NT-Northern Territory</h2></a>
                  <li><a href="{{ url('darwin-escorts') }}">Darwin Escort</a></li>
                  <li><a href="{{ url('katherine-escorts') }}">Katherine Escort</a></li>
                  <li><a href="{{ url('alice-springs-escorts') }}">Alice Springs Escort</a></li>
                
                 
              
    
              </ul>
              
               <ul> <a href="{{ url('tasmania-escorts-escort') }}" style="text-decoration: none;">
                  <h2 style="font-size: 25px; color: white;">Tasmania</h2></a>
                  <li><a href="{{ url('hobart-escorts') }}">Hobart Escort</a></li>
                  <li><a href="{{ url('launceston-escorts') }}">Launceston Escort</a></li>
                
                 
                
    
              </ul>
          </div>
        </div>
</body>
@endsection
