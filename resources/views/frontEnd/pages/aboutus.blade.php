@extends('frontEnd.layout.master')
@section('title','About US')

@section('content')
<style type="text/css">
 .border-white {
  border-color: #fff!important;
}

.border {
  border: 1px solid #dee2e6!important;
}

.bg-light {
  background-color: #f8f9fa!important;
}

.ribbon {
 font-size: 16px !important;
 /* This ribbon is based on a 16px font side and a 24px vertical rhythm. I've used em's to position each element for scalability. If you want to use a different font size you may have to play with the position of the ribbon elements */

 width: 50%;

 position: relative;
 background: #ba89b6;
 color: #fff;
 text-align: center;
 padding: 1em 2em; /* Adjust to suit */
 margin: 2em auto 3em; /* Based on 24px vertical rhythm. 48px bottom margin - normally 24 but the ribbon 'graphics' take up 24px themselves so we double it. */
}
.ribbon:before, .ribbon:after {
 content: "";
 position: absolute;
 display: block;
 bottom: -1em;
 border: 1.5em solid #986794;
 z-index: -1;
}
.ribbon:before {
 left: -2em;
 border-right-width: 1.5em;
 border-left-color: transparent;
}
.ribbon:after {
 right: -2em;
 border-left-width: 1.5em;
 border-right-color: transparent;
}
.ribbon .ribbon-content:before, .ribbon .ribbon-content:after {
 content: "";
 position: absolute;
 display: block;
 border-style: solid;
 border-color: #804f7c transparent transparent transparent;
 bottom: -1em;
}
.ribbon .ribbon-content:before {
 left: 0;
 border-width: 1em 0 0 1em;
}
.ribbon .ribbon-content:after {
 right: 0;
 border-width: 1em 1em 0 0;
}

h2 {
  font: 22px sans-serif;
  margin-top: 0px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
  z-index: 1;
}

h2:before {
  border-top: 2px solid #dfdfdf;
  content:"";
  margin: 0 auto; /* this centers the line to the full width specified */
  position: absolute; /* positioning must be absolute here, and relative positioning must be applied to the parent */
  top: 15px; left: 0; right: 0; bottom: 0;
  width: 95%;
  z-index: -1;
}

h2 span { 
  /* to hide the lines from behind the text, you have to set the background color the same as the container */ 
  background: #fff; 
  padding: 0 15px; 
}

h2.double:before { 
  /* this is just to undo the :before styling from above */
  border-top: none; 
}

h2.double:after {
  border-bottom: 1px solid blue;
  -webkit-box-shadow: 0 1px 0 0 red;
  -moz-box-shadow: 0 1px 0 0 red;
  box-shadow: 0 1px 0 0 red;
  content: "";
  margin: 0 auto; /* this centers the line to the full width specified */
  position: absolute;
  top: 45%; left: 0; right: 0;
  width: 95%;
  z-index: -1;
}
</style>     

<section  class="section">
  <div class="container">
    <h1 class="ribbon">
     <strong class="ribbon-content">About US</strong>
   </h1>
   <div class="row">


    <div class="col-md-6">
      <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->

      
      <div class="row">
        <div class="col-md-12">
          <img alt="Clothing Park LTD" style="border-radius: 5px;" src="{{url('sliderimages/company-store.jpg')}}"  />
        </div>


      </div>

      

    </div>

    <div class="col-md-6">
      <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->
      <h2><span>Company Profile </span></h2>
      <p align="justify" style="padding: 15px; text-indent: 50px;">Clothing Park Limited is primarily dealing in textile and apparel industry as manufacture and sourcing agency in Bangladesh. The Company deals with European, American, Canadian, South African, UK & Australian textile customers and the company is capable to handle all kind of circular knit, flat knit and woven/denim textiles. Rich Cotton Limited selects famed manufacturing facilities and puts utmost sincerity on product quality and having wide range of correlated textile material sourcing facilities and hunt new textile fashion trend. The Company keeps higly skilled and well trained textile educated merchants. In order to quote product cost Clothing Park Limited emphasize to maximize productivity, minimize process lose, managing multi-sourcing and work efficiency. Clothing Park Limited having well trained, highly professional CSR team to control safety issues and relevant social compliance monitoring system in production facilities.</p>

      

      <hr class="half-rule">
      <a class="btn btn-outline-primary" href="javascript:void(0);">Download our company profile</a>
    </div>

  </div>

  <div class="row">
    

    <div class="col-md-6">
      <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->
      <h2><span>Our Vision </span></h2>
      <p align="justify" style="padding: 15px; text-indent: 50px;">We as Clothing Park Limited envisioned is to be one of the world class trading house in Bangladesh for catering the diversc range of requirements of our worthy clients with regard to textile and apparel trade. We strive for the high business growth of our worthy clients while providing them value added services. Every individual at Clothing Park Limited is specially trained to persuade the company’s goals while performing the services at his/her respective position. Therefore, be rest assured that your business interests will be in the hand of a world class professional team. 
        <br /> 
        <br /> 
        Identify with us!® Our mission is to help our clients build brand integrity and reach their goals through optimal execution, sustainable and ethical business practices and the flexibility of being easy to work with. Today, we produce in over 25 countries, and at the same time, continue to invest and expand to support the growth of our customer’s needs.
        <br />
        <br />
        we have been driven to help our clients build brand equity and customer loyalty through quality, consistency and alignment with their objectives. Our mission and vision are built on the premise that our client’s goals serve as the results we aim to achieve.
      </p>

    </div>

     <div class="col-md-6">
      <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->

      
      <div class="row">
        <div class="col-md-12">
          <img alt="Clothing Park LTD Planing" style="border-radius: 5px;" src="{{url('sliderimages/clothing-park-ltd-planing.jpg')}}"  />
        </div>


      </div>

      

     </div>

  </div>

    <div class="row">
    

     <div class="col-md-6">
      <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->

      
      <div class="row">
        <div class="col-md-12">
          <img alt="Clothing Park LTD Planing" style="border-radius: 5px;" src="{{url('sliderimages/clothes-clothing-department.jpg')}}"  />
        </div>


      </div>

      

     </div>
    <div class="col-md-6">
      <!-- Icon by Bytesize https://github.com/danklammer/bytesize-icons -->
      <h2><span>Our Mission </span></h2>
      <p align="justify" style="padding: 15px; text-indent: 50px;">Our core mission is to maximize the business volume and profitability of our valued clients.Therefore, beinga prominent trading house for textile and apparel sector, we are committed to facilitate the buyers as well as the sellers for negotiating at the best deals with the full satisfaction of our clients.We are pursuing the client’s business requirements with our full devotion and outmost hardwork and honesty.
        <br /> 
        <br /> 
        This framework of expected behavior is evident in everything we do, from serving our clients and core business operations, to further growing our brand, reputation and transparency as a company.

r-pac factories across the globe have been audited for social and ethical compliance in accordance with local laws and retail requirements. Retailers, brand owners and product vendors gain peace of mind knowing their brands are produced by an accountable and reputable partner.
        <br />
      </p>

    </div>


  </div>


</div>

</section>



@endsection
@section('js')

@endsection

