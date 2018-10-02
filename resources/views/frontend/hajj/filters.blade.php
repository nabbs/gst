@extends ('frontend.layouts.master')
@section('title', 'GST - Hajj - filters')
@section ('content')
<section class="probootstrap_section" id="hajj-results">
  <style type="text/css" media="screen">



  #hajj-results p {
  margin: 0;
  padding: 0;
  font-size: 15px;
  }
  #hajj-results .item {
  position: relative;
  }
  #hajj-results .item {
  position: relative;
  }

  #hajj-results .card-img-top img {
    width: 318px!important;
    height: 200px;
    z-index: -10;
    overflow: hidden;
  }

  #hajj-results .card-img-top {
    min-height: 200px;
  }
  #hajj-results .img-layer {
  position: absolute;
  top: 10px;
  right: -10px;
  color: #fff;
  font-weight: bold;
  }
  #hajj-results .img-layer p {
  background: rgb(96, 153, 240);
  margin-bottom: 5px;
  padding: 5px!important;
  }
  #hajj-results .fa-star {
  color: #f90;
  }
  #hajj-results .fa-info {
  padding: 5px;
  color: #fff;
  }
  #hajj-results .card-body small {
  display: block;
  }
  #hajj-results .card-footer i {
  font-size: 25px;
  padding-right: 10px;
  color: rgb(96, 153, 240);
  }

  #hajj-results .tooltip {
    display: none;
  }

    #hajj-results .card {
      min-height: 
    }

  #hajj-results .card:hover {
    -webkit-transform: translateY(-8px);
    transform: translateY(-8px);
    -webkit-box-shadow: 0 0 8px 0 rgba(0,0,0,0.03), 0 20px 30px 0 rgba(0,0,0,0.1);
    box-shadow: 0 0 8px 0 rgba(0,0,0,0.03), 0 20px 30px 0 rgba(0,0,0,0.1);
  }

  #hajj-results .card {
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out
  }

  #hajj-results .green {
    color: rgb(12,167,12);
  }

  #hajj-results .red {
    color: rgb(220, 16, 22);
    font-weight: 500;
  }

    #hajj-results p.agentinfo {
      height: 30px;
  }

  @media (min-width:1000px) {
    #hajj-results .fa-star {
      font-size: 13px!important;
    }
  }



  	* { box-sizing: border-box; }



/* ---- button ---- */

.button {
  display: inline-block;
  padding: 0.5em 1.0em;
  margin-bottom: 10px;
  background: #EEE;
  border: none;
  border-radius: 7px;
  background-image: linear-gradient( to bottom, hsla(0, 0%, 0%, 0), hsla(0, 0%, 0%, 0.2) );
  color: #222;
  font-family: sans-serif;
  font-size: 16px;
  text-shadow: 0 1px white;
  cursor: pointer;
}

.button:hover {
  background-color: #8CF;
  text-shadow: 0 1px hsla(0, 0%, 100%, 0.5);
  color: #222;
}

.button:active,
.button.is-checked {
  background-color: #28F;
}

.button.is-checked {
  color: white;
  text-shadow: 0 -1px hsla(0, 0%, 0%, 0.8);
}

.button:active {
  box-shadow: inset 0 1px 10px hsla(0, 0%, 0%, 0.8);
}

/* ---- button-group ---- */

.button-group:after {
  content: '';
  display: block;
  clear: both;
}

.button-group .button {
  float: left;
  border-radius: 0;
  margin-left: 0;
  margin-right: 1px;
}

.button-group .button:first-child { border-radius: 0.5em 0 0 0.5em; }
.button-group .button:last-child { border-radius: 0 0.5em 0.5em 0; }

/* ---- grid ---- */

.grid {
  border: 1px solid #333;
}

/* clear fix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- .element-item ---- */

.element-item {
  position: relative;
  float: left;
  width: 100px;
  height: 100px;
  margin: 5px;
  padding: 10px;
  background: #888;
  color: #262524;
}

.element-item > * {
  margin: 0;
  padding: 0;
}

.element-item .name {
  position: absolute;

  left: 10px;
  top: 60px;
  text-transform: none;
  letter-spacing: 0;
  font-size: 12px;
  font-weight: normal;
}

.element-item .symbol {
  position: absolute;
  left: 10px;
  top: 0px;
  font-size: 42px;
  font-weight: bold;
  color: white;
}

.element-item .number {
  position: absolute;
  right: 8px;
  top: 5px;
}

.element-item .weight {
  position: absolute;
  left: 10px;
  top: 76px;
  font-size: 12px;
}

.element-item.alkali          { background: #F00; background: hsl(   0, 100%, 50%); }
.element-item.alkaline-earth  { background: #F80; background: hsl(  36, 100%, 50%); }
.element-item.lanthanoid      { background: #FF0; background: hsl(  72, 100%, 50%); }
.element-item.actinoid        { background: #0F0; background: hsl( 108, 100%, 50%); }
.element-item.transition      { background: #0F8; background: hsl( 144, 100%, 50%); }
.element-item.post-transition { background: #0FF; background: hsl( 180, 100%, 50%); }
.element-item.metalloid       { background: #08F; background: hsl( 216, 100%, 50%); }
.element-item.diatomic        { background: #00F; background: hsl( 252, 100%, 50%); }
.element-item.halogen         { background: #F0F; background: hsl( 288, 100%, 50%); }
.element-item.noble-gas       { background: #F08; background: hsl( 324, 100%, 50%); }

  </style>


  <h1>Isotope - filtering with URL hash</h1>

<div class="button-group filter-button-group">
  <button class="button is-checked" data-filter="*">show all</button>
  <button class="button" data-filter=".metal">metal</button>
  <button class="button" data-filter=".transition">transition</button>
  <button class="button" data-filter=".alkali, .alkaline-earth">alkali and alkaline-earth</button>
  <button class="button" data-filter=":not(.transition)">not transition</button>
  <button class="button" data-filter=".metal:not(.transition)">metal but not transition</button>
  <button class="button" data-filter="numberGreaterThan50">number > 50</button>
  <button class="button" data-filter="ium">name ends with &ndash;ium</button>
</div>

<div class="grid">
<div class="row">
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Mercury</h3>
    <p class="symbol">Hg</p>
    <p class="number">80</p>
    <p class="weight">200.59</p>
  </div>
  <div class="element-item metalloid " data-category="metalloid">
    <h3 class="name">Tellurium</h3>
    <p class="symbol">Te</p>
    <p class="number">52</p>
    <p class="weight">127.6</p>
  </div>
  <div class="element-item post-transition metal " data-category="post-transition">
    <h3 class="name">Bismuth</h3>
    <p class="symbol">Bi</p>
    <p class="number">83</p>
    <p class="weight">208.980</p>
  </div>
  <div class="element-item post-transition metal " data-category="post-transition">
    <h3 class="name">Lead</h3>
    <p class="symbol">Pb</p>
    <p class="number">82</p>
    <p class="weight">207.2</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Gold</h3>
    <p class="symbol">Au</p>
    <p class="number">79</p>
    <p class="weight">196.967</p>
  </div>
  <div class="element-item alkali metal " data-category="alkali">
    <h3 class="name">Potassium</h3>
    <p class="symbol">K</p>
    <p class="number">19</p>
    <p class="weight">39.0983</p>
  </div>
  <div class="element-item alkali metal " data-category="alkali">
    <h3 class="name">Sodium</h3>
    <p class="symbol">Na</p>
    <p class="number">11</p>
    <p class="weight">22.99</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Cadmium</h3>
    <p class="symbol">Cd</p>
    <p class="number">48</p>
    <p class="weight">112.411</p>
  </div>
  <div class="element-item alkaline-earth metal " data-category="alkaline-earth">
    <h3 class="name">Calcium</h3>
    <p class="symbol">Ca</p>
    <p class="number">20</p>
    <p class="weight">40.078</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Rhenium</h3>
    <p class="symbol">Re</p>
    <p class="number">75</p>
    <p class="weight">186.207</p>
  </div>
  <div class="element-item post-transition metal " data-category="post-transition">
    <h3 class="name">Thallium</h3>
    <p class="symbol">Tl</p>
    <p class="number">81</p>
    <p class="weight">204.383</p>
  </div>
  <div class="element-item metalloid " data-category="metalloid">
    <h3 class="name">Antimony</h3>
    <p class="symbol">Sb</p>
    <p class="number">51</p>
    <p class="weight">121.76</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Cobalt</h3>
    <p class="symbol">Co</p>
    <p class="number">27</p>
    <p class="weight">58.933</p>
  </div>
  <div class="element-item lanthanoid metal inner-transition " data-category="lanthanoid">
    <h3 class="name">Ytterbium</h3>
    <p class="symbol">Yb</p>
    <p class="number">70</p>
    <p class="weight">173.054</p>
  </div>
  <div class="element-item noble-gas nonmetal " data-category="noble-gas">
    <h3 class="name">Argon</h3>
    <p class="symbol">Ar</p>
    <p class="number">18</p>
    <p class="weight">39.948</p>
  </div>
  <div class="element-item diatomic nonmetal " data-category="diatomic">
    <h3 class="name">Nitrogen</h3>
    <p class="symbol">N</p>
    <p class="number">7</p>
    <p class="weight">14.007</p>
  </div>
  <div class="element-item actinoid metal inner-transition " data-category="actinoid">
    <h3 class="name">Uranium</h3>
    <p class="symbol">U</p>
    <p class="number">92</p>
    <p class="weight">238.029</p>
  </div>
  <div class="element-item actinoid metal inner-transition " data-category="actinoid">
    <h3 class="name">Plutonium</h3>
    <p class="symbol">Pu</p>
    <p class="number">94</p>
    <p class="weight">(244)</p>
  </div>
<div class="col-md-4 mb-5 item element-item metal">
        <div class="card">
          <div class="card-img-top">
            <a href="https://www.aftatours.com/hajj/hajj-package-1/"> 
               

             <img src="https://www.aftatours.com/wp-content/uploads/2017/01/swissotel-makkah1a.jpg" alt="">

            </a>

            <div class="img-layer">

              <p class="showtooltip tooltipstered"> <em>from</em> <strong>£8,550pp</strong> <i class="fa fa-info"></i></p>
              
            </div>
          </div>
          <div class="card-body">

             
              <p class="agentinfo green">Agent: <a href="https://www.aftatours.com/hajj/hajj-package-1/"><img src="https://www.aftatours.com/wp-content/uploads/2017/01/cropped-aftatours-logo.png" alt="" width="200" height="30"></a></p>
                        

            <p class="card-text"></p>
            <p>
              <span class="green d-block">Makkah Hotel: </span><span class="red">Swissotel Al-Maqam</span>
                            <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
                            
            </p>
            
            <p>
              <span class="green d-block">Madina Hotel: </span><span class="red"> Dallah Taibah</span>
             
                            <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
                            
              
            </p>
            
            <p class="mt-3"> <a href="https://www.aftatours.com/hajj/hajj-package-1/" class="btn btn-primary btn-block">Book with Afta Tours</a> </p>
          </div>
          <div class="card-footer">
            <p>
              <i class="fa fa-bed showtooltip tooltipstered"></i>
              
              <i class="fa fa-plane showtooltip tooltipstered"></i>              
              <i class="fa fa-list showtooltip tooltipstered"></i>

              <i class="fas fa-walking showtooltip tooltipstered"></i>

              <img src="/images/visa.png" width="30" style="margin:0 8px 8px 0;" class="showtooltip tooltipstered">

              <img src="/images/free.png" width="30" class="showtooltip tooltipstered" style="margin:0 8px 8px 0;">
            </p>
            

          </div>
        </div>
      </div>
</div>
</div>

<div class="row" id="hajj-results">
	
	<div class="card-deck">

      
      <div class="col-md-4 mb-5 item element-item transition metal">

        <div class="card">
          <div class="card-img-top">
            <a href="https://www.aftatours.com/hajj/hajj-package-1/"> 
               

             <img src="https://www.aftatours.com/wp-content/uploads/2017/01/swissotel-makkah1a.jpg" alt="">

            </a>

            <div class="img-layer">

              <p class="showtooltip tooltipstered"> <em>from</em> <strong>£8,550pp</strong> <i class="fa fa-info"></i></p>
              
            </div>
          </div>
          <div class="card-body">

             
              <p class="agentinfo green">Agent: <a href="https://www.aftatours.com/hajj/hajj-package-1/"><img src="https://www.aftatours.com/wp-content/uploads/2017/01/cropped-aftatours-logo.png" alt="" width="200" height="30"></a></p>
                        

            <p class="card-text"></p>
            <p>
              <span class="green d-block">Makkah Hotel: </span><span class="red">Swissotel Al-Maqam</span>
                            <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
                            
            </p>
            
            <p>
              <span class="green d-block">Madina Hotel: </span><span class="red"> Dallah Taibah</span>
             
                            <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
                            
              
            </p>
            
            <p class="mt-3"> <a href="https://www.aftatours.com/hajj/hajj-package-1/" class="btn btn-primary btn-block">Book with Afta Tours</a> </p>
          </div>
          <div class="card-footer">
            <p>
              <i class="fa fa-bed showtooltip tooltipstered"></i>
              
              <i class="fa fa-plane showtooltip tooltipstered"></i>              
              <i class="fa fa-list showtooltip tooltipstered"></i>

              <i class="fas fa-walking showtooltip tooltipstered"></i>

              <img src="/images/visa.png" width="30" style="margin:0 8px 8px 0;" class="showtooltip tooltipstered">

              <img src="/images/free.png" width="30" class="showtooltip tooltipstered" style="margin:0 8px 8px 0;">
            </p>
            

          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-5 item">

        <div class="card">
          <div class="card-img-top">
            <a href="/"> 
              
               <img src="/images/default.jpg" alt="">
              
              </a>

            <div class="img-layer">

              <p class="showtooltip tooltipstered"> <em>from</em> <strong>£5999pp</strong> <i class="fa fa-info"></i></p>
              
            </div>
          </div>
          <div class="card-body">

             
              <p class="agentinfo green">Agent: <a href="/"><img src="/storage/hajjs/July2018/GF09z4acn34JqLllhqWL.jpg" alt="" width="200" height="30"></a></p>
                        

            <p class="card-text"></p>
            <p>
              <span class="green d-block">Makkah Hotel: </span><span class="red">Hilton</span>
                            <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
                            
            </p>
            
            <p>
              <span class="green d-block">Madina Hotel: </span><span class="red"> Hilton</span>
             
                            <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
                            
              
            </p>
            
            <p class="mt-3"> <a href="/" class="btn btn-primary btn-block">Book with Nabi Arshad</a> </p>
          </div>
          <div class="card-footer">
            <p>
              <i class="fa fa-bed showtooltip tooltipstered"></i>
              
              <i class="fa fa-plane showtooltip tooltipstered"></i>              
              <i class="fa fa-list showtooltip tooltipstered"></i>

              <i class="fas fa-walking showtooltip tooltipstered"></i>

              <img src="/images/visa.png" width="30" style="margin:0 8px 8px 0;" class="showtooltip tooltipstered">

              <img src="/images/free.png" width="30" class="showtooltip tooltipstered" style="margin:0 8px 8px 0;">
            </p>
            

          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-5 item">

        <div class="card">
          <div class="card-img-top">
            <a href="/"> 
              
               <img src="/images/default.jpg" alt="">
              
              </a>

            <div class="img-layer">

              <p class="showtooltip tooltipstered"> <em>from</em> <strong>£5999pp</strong> <i class="fa fa-info"></i></p>
              
            </div>
          </div>
          <div class="card-body">

             
              <p class="agentinfo green">Agent: <a href="/"><img src="/storage/hajjs/July2018/GF09z4acn34JqLllhqWL.jpg" alt="" width="200" height="30"></a></p>
                        

            <p class="card-text"></p>
            <p>
              <span class="green d-block">Makkah Hotel: </span><span class="red">Hilton</span>
                            <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
                            
            </p>
            
            <p>
              <span class="green d-block">Madina Hotel: </span><span class="red"> Hilton</span>
             
                            <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
                            
              
            </p>
            
            <p class="mt-3"> <a href="/" class="btn btn-primary btn-block">Book with Nabi Arshad</a> </p>
          </div>
          <div class="card-footer">
            <p>
              <i class="fa fa-bed showtooltip tooltipstered"></i>
              
              <i class="fa fa-plane showtooltip tooltipstered"></i>              
              <i class="fa fa-list showtooltip tooltipstered"></i>

              <i class="fas fa-walking showtooltip tooltipstered"></i>

              <img src="/images/visa.png" width="30" style="margin:0 8px 8px 0;" class="showtooltip tooltipstered">

              <img src="/images/free.png" width="30" class="showtooltip tooltipstered" style="margin:0 8px 8px 0;">
            </p>
            

          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-5 item">

        <div class="card">
          <div class="card-img-top">
            <a href="/"> 
              
               <img src="/images/default.jpg" alt="">
              
              </a>

            <div class="img-layer">

              <p class="showtooltip tooltipstered"> <em>from</em> <strong>£5999pp</strong> <i class="fa fa-info"></i></p>
              
            </div>
          </div>
          <div class="card-body">

             
              <p class="agentinfo green">Agent: <a href="/"><img src="/storage/hajjs/July2018/GF09z4acn34JqLllhqWL.jpg" alt="" width="200" height="30"></a></p>
                        

            <p class="card-text"></p>
            <p>
              <span class="green d-block">Makkah Hotel: </span><span class="red">Hilton</span>
                            <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
                            
            </p>
            
            <p>
              <span class="green d-block">Madina Hotel: </span><span class="red"> Hilton</span>
             
                            <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
                            
              
            </p>
            
            <p class="mt-3"> <a href="/" class="btn btn-primary btn-block">Book with Nabi Arshad</a> </p>
          </div>
          <div class="card-footer">
            <p>
              <i class="fa fa-bed showtooltip tooltipstered"></i>
              
              <i class="fa fa-plane showtooltip tooltipstered"></i>              
              <i class="fa fa-list showtooltip tooltipstered"></i>

              <i class="fas fa-walking showtooltip tooltipstered"></i>

              <img src="/images/visa.png" width="30" style="margin:0 8px 8px 0;" class="showtooltip tooltipstered">

              <img src="/images/free.png" width="30" class="showtooltip tooltipstered" style="margin:0 8px 8px 0;">
            </p>
            

          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-5 item">

        <div class="card">
          <div class="card-img-top">
            <a href="/"> 
              
               <img src="/images/default.jpg" alt="">
              
              </a>

            <div class="img-layer">

              <p class="showtooltip tooltipstered"> <em>from</em> <strong>£5999pp</strong> <i class="fa fa-info"></i></p>
              
            </div>
          </div>
          <div class="card-body">

             
              <p class="agentinfo green">Agent: <a href="/"><img src="/storage/hajjs/July2018/GF09z4acn34JqLllhqWL.jpg" alt="" width="200" height="30"></a></p>
                        

            <p class="card-text"></p>
            <p>
              <span class="green d-block">Makkah Hotel: </span><span class="red">Hilton</span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            
            </p>
            
            <p>
              <span class="green d-block">Madina Hotel: </span><span class="red"> Hilton</span>
             
                            <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
                            
              
            </p>
            
            <p class="mt-3"> <a href="/" class="btn btn-primary btn-block">Book with Nabi Arshad</a> </p>
          </div>
          <div class="card-footer">
            <p>
              <i class="fa fa-bed showtooltip tooltipstered"></i>
              
              <i class="fa fa-plane showtooltip tooltipstered"></i>              
              <i class="fa fa-list showtooltip tooltipstered"></i>

              <i class="fas fa-walking showtooltip tooltipstered"></i>

              <img src="/images/visa.png" width="30" style="margin:0 8px 8px 0;" class="showtooltip tooltipstered">

              <img src="/images/free.png" width="30" class="showtooltip tooltipstered" style="margin:0 8px 8px 0;">
            </p>
            

          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-5 item">

        <div class="card">
          <div class="card-img-top">
            <a href="/"> 
              
               <img src="/images/default.jpg" alt="">
              
              </a>

            <div class="img-layer">

              <p class="showtooltip tooltipstered"> <em>from</em> <strong>£5999pp</strong> <i class="fa fa-info"></i></p>
              
            </div>
          </div>
          <div class="card-body">

             
              <p class="agentinfo green">Agent: <a href="/"><img src="/storage/hajjs/July2018/GF09z4acn34JqLllhqWL.jpg" alt="" width="200" height="30"></a></p>
                        

            <p class="card-text"></p>
            <p>
              <span class="green d-block">Makkah Hotel: </span><span class="red">Hilton</span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            
            </p>
            
            <p>
              <span class="green d-block">Madina Hotel: </span><span class="red"> Hilton</span>
             
                            <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
                            
              
            </p>
            
            <p class="mt-3"> <a href="/" class="btn btn-primary btn-block">Book with Nabi Arshad</a> </p>
          </div>
          <div class="card-footer">
            <p>
              <i class="fa fa-bed showtooltip tooltipstered"></i>
              
              <i class="fa fa-plane showtooltip tooltipstered"></i>              
              <i class="fa fa-list showtooltip tooltipstered"></i>

              <i class="fas fa-walking showtooltip tooltipstered"></i>

              <img src="/images/visa.png" width="30" style="margin:0 8px 8px 0;" class="showtooltip tooltipstered">

              <img src="/images/free.png" width="30" class="showtooltip tooltipstered" style="margin:0 8px 8px 0;">
            </p>
            

          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-5 item">

        <div class="card">
          <div class="card-img-top">
            <a href="/"> 
              
               <img src="/images/default.jpg" alt="">
              
              </a>

            <div class="img-layer">

              <p class="showtooltip tooltipstered"> <em>from</em> <strong>£5999pp</strong> <i class="fa fa-info"></i></p>
              
            </div>
          </div>
          <div class="card-body">

                          <p class="agentinfo green">Agent: <a href="/" class="info">Nabi Arshad</a></p>
                        

            <p class="card-text"></p>
            <p>
              <span class="green d-block">Makkah Hotel: </span><span class="red">Hilton</span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            
            </p>
            
            <p>
              <span class="green d-block">Madina Hotel: </span><span class="red"> Hilton</span>
             
                            <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
                            
              
            </p>
            
            <p class="mt-3"> <a href="/" class="btn btn-primary btn-block">Book with Nabi Arshad</a> </p>
          </div>
          <div class="card-footer">
            <p>
              <i class="fa fa-bed showtooltip tooltipstered"></i>
              
                            
              <i class="fa fa-list showtooltip tooltipstered"></i>

              <i class="fas fa-walking showtooltip tooltipstered"></i>

              <img src="/images/visa.png" width="30" style="margin:0 8px 8px 0;" class="showtooltip tooltipstered">

              <img src="/images/free.png" width="30" class="showtooltip tooltipstered" style="margin:0 8px 8px 0;">
            </p>
            

          </div>
        </div>
      </div>
</div>
</section>
@endsection