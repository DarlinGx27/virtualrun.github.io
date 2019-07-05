<!DOCTYPE html>
<html>
<head>
<style>
body {
     background-image: url('https://get.pxhere.com/photo/mountain-nature-adventures-moments-people-natural-sunset-sky-mountainous-landforms-mountain-range-ridge-wilderness-highland-dawn-morning-atmosphere-hill-horizon-tree-mount-scenery-alps-national-park-evening-hill-station-sunlight-cloud-fell-sunrise-valley-massif-dusk-forest-landscape-winter-escarpment-summit-mountain-pass-meteorological-phenomenon-plateau-haze-1438595.jpg');
     background-repeat : repeat-y;
     background-attachment:fixed;
     background-position: center;
     -webkit-background-size: 100% 100%, auto;
     background-size: 100% 100%, auto;
}
p {
     background-color: hsla(9, 100%, 64%, 0.6);
     color: white;
     padding: 50px;
     margin: 30px;
     /* width: 100px;
     height:100px; */
     border-radius: 24px;
     font-family: verdana;
     font-size: 100;
   }
.button {
  background-color: #000000;
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
  border-radius: 12px;
}
.button:hover {opacity: 1}
 </style>
 </head>
 <body>
 <div class="cities">
     <form action="new.php" method="post" >
      <br/>
      <p>
            eBIB : <input type="text" name="bib" size=3><br/>
      <br/>
            Name : <input type="text" name="name" style="text-transform: uppercase" size=30> <br/>
      <br/>
            KM : <input type="text" name="kmm" size=3><br>
     <br/>
          <button class="button"> OK </button>
     </p>
     </form>
   </div>
</body>
</html>