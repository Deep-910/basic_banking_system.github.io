<!-- Font Awesome 5.15.1 CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>


<div class="wrapper">

  <a href="https://www.linkedin.com/feed/" class="icon lindlin">
    <div class="tooltip ">Linkdlin</div>
    <span><i class="fab fa-linkedin-in"></i></span>
  </a>
  <a href="https://www.nseindia.com/" class="icon twitter">
    <div class="tooltip">Twitter</div>
    <span><i class="fab fa-twitter"></i></span>
  </a>
  <a href="https://www.instagram.com/" class="icon instagram">
    <div class="tooltip">Instagram</div>
    <span><i class="fab fa-instagram"></i></span>
  </a>
  <a href="https://github.com/Deep-910" class="icon github">
    <div class="tooltip">Github</div>
    <span><i class="fab fa-github"></i></span>
  </a>
  <a href="https://www.youtube.com/@Deepanshubargal" class="icon youtube">
    <div class="tooltip">Youtube</div>
    <span><i class="fab fa-youtube"></i></span>
  </a>
</div>
<style>
  .wrapper{
    align-items: center;
    text-align: center;
    margin-top: 10vh;
    width: 100%;
    padding-left: -2px;
    margin-left: 15px;
  }
  .wrapper .icon{
  position: relative;
  background-color: #ffffff;
  border-radius: 50%;
  margin: 10px;
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 22px;
  display: inline-block;
  align-items: center;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  color: #333;
  text-decoration: none;
}
.wrapper .tooltip {
  position: absolute;
  top: 0;
  line-height: 1.5;
  font-size: 14px;
  background-color: #ffffff;
  color: #ffffff;
  padding: 5px 8px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .tooltip::before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  background-color: #ffffff;
  bottom: -3px;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon:hover .tooltip {
  top: -45px;
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}
.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip {
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}
.wrapper .lindlin:hover,
.wrapper .lindlin:hover .tooltip,
.wrapper .lindlin:hover .tooltip::before {
  background-color: #3b5999;
  color: #ffffff;
}
.wrapper .twitter:hover,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip::before {
  background-color: #46c1f6;
  color: #ffffff;
}
.wrapper .instagram:hover,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip::before {
  background-color: #e1306c;
  color: #ffffff;
}
.wrapper .github:hover,
.wrapper .github:hover .tooltip,
.wrapper .github:hover .tooltip::before {
  background-color: #333333;
  color: #ffffff;
}
.wrapper .youtube:hover,
.wrapper .youtube:hover .tooltip,
.wrapper .youtube:hover .tooltip::before {
  background-color: #de463b;
  color: #ffffff;
}
</style>
<footer class="text-center mt-4 py-2 ">

        <p style="text-align: center;">&copy 2022. Made by <b>Deepanshu Bargal</b></p>
        
      </footer>