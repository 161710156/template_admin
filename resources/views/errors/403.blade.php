<style>
  /**
  * -------------------------------------------------- Brand Colors
  */
/**
  * -------------------------------------------------- Color Palette
  */
.floating-box {
  display: block;
  background: #fff;
  border-color: rgba(0, 39, 69, 0.11);
  border-radius: 4px;
  border-style: solid;
  border-width: 1px;
  box-shadow: 0 4px 7px rgba(0, 33, 60, 0.04);
  z-index: 1; }

@font-face {
  font-family: 'Brace';
  src: url("/assets/brace-medium.eot");
  src: url("/assets/brace-medium.eot?#iefix") format("embedded-opentype"), url("/assets/brace-medium.woff2") format("woff2"), url("/assets/brace-medium.woff") format("woff"), url("/assets/brace-medium.ttf") format("truetype"), url("/assets/brace-medium.svg#wf") format("svg"); }

html {
  font: 112.5%/1 sans-serif; }

body {
  font: inherit;
  letter-spacing: -0.003em;
  font-family: "acumin-pro", "Helvetica Neue", helvetica, sans-serif;
  text-rendering: optimizeLegibility;
  text-rendering: geometricPrecision;
  font-smooth: always;
  font-smooth: never;
  font-smoothing: antialiased;
  -webkit-font-smoothing: antialiased;
  color: #384051; }

p, li {
  line-height: 1.6;
  color: inherit;
  margin-top: 1.6rem; }

li {
  margin-top: 0.2666666667rem; }

label {
  line-height: 1.6;
  color: inherit; }

h1, h2, h3, h4, h5, h6 {
  color: inherit; }

input {
  font-size: 1em;
  color: inherit;
  font-family: "acumin-pro", "Helvetica Neue", helvetica, sans-serif; }

button {
  font-size: inherit;
  padding: 0.375em 1em;
  border: 2px solid currentColor;
  color: inherit;
  cursor: pointer; }

.section-title {
  font-family: "Brace", "acumin-pro", "Helvetica Neue", helvetica, sans-serif;
  line-height: 1.18;
  font-size: 1.833333333em;
  font-weight: normal;
  letter-spacing: -0.02em;
  margin-bottom: 0;
  color: #384051; }

.section-subtitle {
  line-height: 1.18;
  font-size: 1.166666667em;
  font-weight: bold;
  letter-spacing: -0.02em;
  margin-bottom: 0;
  color: #384051; }

.hint {
  font-size: 0.888888889em;
  font-style: italic;
  opacity: 0.8; }

.page-layout {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center; }

.how-it-works {
  padding: 4.8rem 2em;
  width: 100%;
  max-width: 64em;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -ms-flex-pack: distribute;
      justify-content: space-around;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  overflow: hidden; }
  .how-it-works > .section-title {
    text-align: center;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%; }
  .how-it-works > .diagram {
    width: 100%;
    margin: 1.6rem 0;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%; }
  .how-it-works > .instructions {
    overflow: hidden;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 300vw;
            flex: 0 0 300vw;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between; }
    .how-it-works > .instructions > .instruction {
      -webkit-box-flex: 0.333333333333;
          -ms-flex: 0.333333333333;
              flex: 0.333333333333;
      padding: 0 2em;
      text-align: center;
      -webkit-transition: -webkit-transform 600ms ease;
      transition: -webkit-transform 600ms ease;
      transition: transform 600ms ease;
      transition: transform 600ms ease, -webkit-transform 600ms ease; }
      .how-it-works > .instructions > .instruction > p {
        margin-top: 0.1966666667em; }
  .how-it-works > .instructions > .instruction {
    -webkit-transform: translateX(100%);
            transform: translateX(100%); }

.how-it-works.-step2a > .instructions > .instruction,
.how-it-works.-step2b > .instructions > .instruction,
.how-it-works.-step2c > .instructions > .instruction {
  -webkit-transform: translateX(0);
          transform: translateX(0); }

.how-it-works.-step3a > .instructions > .instruction,
.how-it-works.-step3b > .instructions > .instruction,
.how-it-works.-step3c > .instructions > .instruction {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%); }

@media (min-width: 36em) {
  .how-it-works > .instructions {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%; }
    .how-it-works > .instructions > .instruction {
      -webkit-transform: none !important;
              transform: none !important;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      text-align: left;
      -webkit-box-align: start;
          -ms-flex-align: start;
              align-items: flex-start; }
      .how-it-works > .instructions > .instruction > .section-subtitle {
        text-align: right;
        margin-right: 1em;
        -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
                flex: 0 0 25%; }
      .how-it-works > .instructions > .instruction > p {
        -webkit-box-flex: 0;
            -ms-flex: 0 1 30em;
                flex: 0 1 30em;
        margin: 0; }
    .how-it-works > .instructions > .instruction + .instruction {
      margin-top: 1.6rem; }
    .how-it-works > .instructions > .instruction {
      opacity: 0.3333333;
      -webkit-transition: opacity 600ms ease;
      transition: opacity 600ms ease; }
  .how-it-works.-step1a > .instructions > .instruction.-step1, .how-it-works.-step1b > .instructions > .instruction.-step1, .how-it-works.-step1c > .instructions > .instruction.-step1 {
    opacity: 1; }
  .how-it-works.-step2a > .instructions > .instruction.-step2, .how-it-works.-step2b > .instructions > .instruction.-step2, .how-it-works.-step2c > .instructions > .instruction.-step2 {
    opacity: 1; }
  .how-it-works.-step3a > .instructions > .instruction.-step3, .how-it-works.-step3b > .instructions > .instruction.-step3, .how-it-works.-step3c > .instructions > .instruction.-step3 {
    opacity: 1; } }

@media (min-width: 64em) {
  .how-it-works > .instructions {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
    -webkit-box-align: start;
        -ms-flex-align: start;
                -ms-grid-row-align: flex-start;
            align-items: flex-start;
    overflow: hidden;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%; }
    .how-it-works > .instructions > .instruction {
      text-align: left;
      -webkit-box-flex: 0.3;
          -ms-flex: 0.3;
              flex: 0.3;
      padding: 0;
      display: block; }
      .how-it-works > .instructions > .instruction > .section-subtitle {
        text-align: left; }
    .how-it-works > .instructions > .instruction + .instruction {
      margin-top: 0; } }

.neighborhood-diagram .line,
.neighborhood-diagram .shape {
  fill: white;
  stroke: #384051;
  stroke-width: 2;
  stroke-linecap: round;
  stroke-miterlimit: 10; }

.neighborhood-diagram .line {
  fill: none; }

.neighborhood-diagram .antenna > .shape {
  fill: #384051;
  stroke: none; }

.neighborhood-diagram .antenna > .line {
  fill: none;
  stroke: #384051; }

.neighborhood-diagram .antenna > .radio-waves {
  opacity: 0; }

.neighborhood-diagram .location-marker > .shape {
  fill: #f97168;
  stroke: none; }

.neighborhood-diagram .map > .shape {
  fill: #e9e5dc;
  stroke: none; }

.neighborhood-diagram .computer > .shape {
  stroke: none; }

.neighborhood-diagram .computer > .stand {
  fill: #cacaca; }

.neighborhood-diagram .computer > .strip,
.neighborhood-diagram .computer > .back {
  fill: #384051; }

.neighborhood-diagram .computer > .screen {
  fill: #384051; }

.neighborhood-diagram .phone > .line {
  stroke: #ccc; }

.neighborhood-diagram .phone > .button {
  stroke: none;
  fill: #ccc; }

.neighborhood-diagram .phone > .back {
  stroke: none;
  fill: #384051; }

.neighborhood-diagram .phone > .screen {
  stroke: none;
  fill: #384051; }

.neighborhood-diagram .phone > .order-button {
  stroke: none;
  fill: #64be6c; }

.neighborhood-diagram .handset > .shape {
  stroke: none;
  fill: #384051; }

.neighborhood-diagram .lawn-mower > .body,
.neighborhood-diagram .lawn-mower > .cap {
  fill: #29e877; }

.neighborhood-diagram .ground .shape {
  fill: #29e877;
  stroke-width: 0; }

.neighborhood-diagram .ground .mask {
  fill: white; }

.neighborhood-diagram .checkmark > .shape {
  fill: #29e877; }

.neighborhood-diagram .checkmark > .line {
  fill: none;
  stroke: #384051; }

.neighborhood-diagram .grass > .line {
  stroke: #64be6c; }

.neighborhood-diagram > .city-skyline .shape {
  stroke-width: 0;
  fill: #f3f3f3; }

.neighborhood-diagram > .yardly-office > .yardly-logo .shape {
  stroke-width: 0;
  fill: #384051; }

.neighborhood-diagram > .customer-property .customer-house > .roof .shape {
  fill: #ff4900; }

.neighborhood-diagram > .sun .shape {
  fill: #ffe877; }

.neighborhood-diagram .cloud-large {
  -webkit-animation: floating-clouds 120s linear infinite;
          animation: floating-clouds 120s linear infinite; }

.neighborhood-diagram .cloud-small {
  -webkit-animation: floating-clouds 240s linear infinite;
          animation: floating-clouds 240s linear infinite; }

.neighborhood-diagram > .customer-property,
.neighborhood-diagram > .yardly-office,
.neighborhood-diagram > .city-skyline {
  -webkit-transition: -webkit-transform 3s ease;
  transition: -webkit-transform 3s ease;
  transition: transform 3s ease;
  transition: transform 3s ease, -webkit-transform 3s ease; }

.neighborhood-diagram > .lawn-mower {
  -webkit-transition: -webkit-transform 5s ease;
  transition: -webkit-transform 5s ease;
  transition: transform 5s ease;
  transition: transform 5s ease, -webkit-transform 5s ease; }

.neighborhood-diagram > .order-method-app,
.neighborhood-diagram > .order-method-web,
.neighborhood-diagram > .order-method-phone {
  -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
  transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
  transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
  transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44), -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
  -webkit-transform: translate3d(-128px, 0, 0);
          transform: translate3d(-128px, 0, 0); }

.neighborhood-diagram > .wind {
  -webkit-transform: translate3d(-100px, 60px, 0) scale(0.75);
          transform: translate3d(-100px, 60px, 0) scale(0.75); }

.neighborhood-diagram > .clouds {
  -webkit-transform: translate3d(0, 60px, 0) scale(0.75);
          transform: translate3d(0, 60px, 0) scale(0.75); }

.neighborhood-diagram > .sun {
  -webkit-transform: translate3d(-480px, 50px, 0) scale(0.75);
          transform: translate3d(-480px, 50px, 0) scale(0.75); }

.neighborhood-diagram > .customer-property,
.neighborhood-diagram > .yardly-office,
.neighborhood-diagram > .lawn-mower {
  -webkit-transform: translateX(-130px);
          transform: translateX(-130px); }
  .neighborhood-diagram > .customer-property > .antenna,
  .neighborhood-diagram > .yardly-office > .antenna,
  .neighborhood-diagram > .lawn-mower > .antenna {
    -webkit-transform: translateY(40px);
            transform: translateY(40px);
    -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44), -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44); }

.neighborhood-diagram > .customer-property > .tall-grass {
  -webkit-transform: scaleY(1);
          transform: scaleY(1);
  -webkit-transform-origin: bottom;
          transform-origin: bottom;
  -webkit-transition: -webkit-transform 1s ease;
  transition: -webkit-transform 1s ease;
  transition: transform 1s ease;
  transition: transform 1s ease, -webkit-transform 1s ease; }

.neighborhood-diagram > .city-skyline {
  -webkit-transform: translate3d(-30px, 80px, 0) scale(0.5);
          transform: translate3d(-30px, 80px, 0) scale(0.5); }

.neighborhood-diagram > .checkmark {
  -webkit-transform: translate3d(-140px, 0px, 0) scale(0.5);
          transform: translate3d(-140px, 0px, 0) scale(0.5);
  -webkit-transform-origin: center;
          transform-origin: center;
  -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
  transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
  transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
  transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44), -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44); }

.-step1b .neighborhood-diagram > .order-method-app {
  -webkit-transform: translate3d(-99px, -134px, 0);
          transform: translate3d(-99px, -134px, 0); }

.-step1b .neighborhood-diagram > .order-method-web {
  -webkit-transform: translate3d(-150px, -120px, 0);
          transform: translate3d(-150px, -120px, 0); }

.-step1b .neighborhood-diagram > .order-method-phone {
  -webkit-transform: translate3d(-70px, -90px, 0);
          transform: translate3d(-70px, -90px, 0); }

.-step1c .neighborhood-diagram > .customer-property,
.-step1c .neighborhood-diagram > .yardly-office {
  -webkit-transform: translateX(-700px);
          transform: translateX(-700px);
  -webkit-transition: -webkit-transform 3s ease 1s;
  transition: -webkit-transform 3s ease 1s;
  transition: transform 3s ease 1s;
  transition: transform 3s ease 1s, -webkit-transform 3s ease 1s; }

.-step1c .neighborhood-diagram > .city-skyline {
  -webkit-transform: translate3d(-220px, 80px, 0) scale(0.5);
          transform: translate3d(-220px, 80px, 0) scale(0.5);
  -webkit-transition: -webkit-transform 3s ease 1s;
  transition: -webkit-transform 3s ease 1s;
  transition: transform 3s ease 1s;
  transition: transform 3s ease 1s, -webkit-transform 3s ease 1s; }

.-step1c .neighborhood-diagram > .order-method-app {
  -webkit-transform: translate3d(-117px, -114px, 0);
          transform: translate3d(-117px, -114px, 0);
  -webkit-transition: -webkit-transform 1s ease;
  transition: -webkit-transform 1s ease;
  transition: transform 1s ease;
  transition: transform 1s ease, -webkit-transform 1s ease; }

.-step2a .neighborhood-diagram > .order-method-app {
  -webkit-transform: translate3d(-128px, 0, 0);
          transform: translate3d(-128px, 0, 0);
  -webkit-transition: none;
  transition: none; }

.-step2a .neighborhood-diagram > .customer-property,
.-step2a .neighborhood-diagram > .yardly-office {
  -webkit-transform: translateX(-700px);
          transform: translateX(-700px); }
  .-step2a .neighborhood-diagram > .customer-property > .antenna,
  .-step2a .neighborhood-diagram > .yardly-office > .antenna {
    -webkit-transform: translateY(0px);
            transform: translateY(0px); }
    .-step2a .neighborhood-diagram > .customer-property > .antenna > .radio-waves,
    .-step2a .neighborhood-diagram > .yardly-office > .antenna > .radio-waves {
      -webkit-animation: sending-signals 1s infinite linear;
              animation: sending-signals 1s infinite linear; }

.-step2a .neighborhood-diagram > .city-skyline {
  -webkit-transform: translate3d(-220px, 80px, 0) scale(0.5);
          transform: translate3d(-220px, 80px, 0) scale(0.5); }

.-step2b .neighborhood-diagram > .customer-property,
.-step2b .neighborhood-diagram > .yardly-office {
  -webkit-transform: translateX(-130px);
          transform: translateX(-130px); }
  .-step2b .neighborhood-diagram > .customer-property > .antenna .-step2b .neighborhood-diagram > .customer-property > .radio-waves,
  .-step2b .neighborhood-diagram > .yardly-office > .antenna .-step2b .neighborhood-diagram > .customer-property > .radio-waves, .-step2b .neighborhood-diagram > .customer-property > .antenna
  .-step2b .neighborhood-diagram > .yardly-office > .radio-waves,
  .-step2b .neighborhood-diagram > .yardly-office > .antenna
  .-step2b .neighborhood-diagram > .yardly-office > .radio-waves {
    -webkit-animation: none;
            animation: none; }

.-step2b .neighborhood-diagram > .city-skyline {
  -webkit-transform: translate3d(-30px, 80px, 0) scale(0.5);
          transform: translate3d(-30px, 80px, 0) scale(0.5); }

.-step2c .neighborhood-diagram > .lawn-mower {
  -webkit-animation: mowing-lawns 5s ease;
          animation: mowing-lawns 5s ease; }

.-step2c .neighborhood-diagram > .customer-property > .tall-grass {
  -webkit-transform: scaleY(0);
          transform: scaleY(0);
  -webkit-transition: -webkit-transform 1s ease 2.5s;
  transition: -webkit-transform 1s ease 2.5s;
  transition: transform 1s ease 2.5s;
  transition: transform 1s ease 2.5s, -webkit-transform 1s ease 2.5s; }

.-step3a .neighborhood-diagram > .customer-property,
.-step3a .neighborhood-diagram > .yardly-office {
  -webkit-transform: translateX(-700px);
          transform: translateX(-700px);
  -webkit-transition: -webkit-transform 1s ease;
  transition: -webkit-transform 1s ease;
  transition: transform 1s ease;
  transition: transform 1s ease, -webkit-transform 1s ease; }
  .-step3a .neighborhood-diagram > .customer-property > .pictures,
  .-step3a .neighborhood-diagram > .yardly-office > .pictures {
    -webkit-transform: translate3d(0, -50px, 0);
            transform: translate3d(0, -50px, 0);
    -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 1s;
    transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 1s;
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 1s;
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 1s, -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 1s; }

.-step3a .neighborhood-diagram > .city-skyline {
  -webkit-transform: translate3d(-220px, 80px, 0) scale(0.5);
          transform: translate3d(-220px, 80px, 0) scale(0.5);
  -webkit-transition: -webkit-transform 1s ease;
  transition: -webkit-transform 1s ease;
  transition: transform 1s ease;
  transition: transform 1s ease, -webkit-transform 1s ease; }

.-step3a .neighborhood-diagram > .customer-property > .tall-grass {
  -webkit-transform: scaleY(0);
          transform: scaleY(0); }

.-step3b .neighborhood-diagram > .customer-property,
.-step3b .neighborhood-diagram > .yardly-office {
  -webkit-transform: translateX(-130px);
          transform: translateX(-130px);
  -webkit-transition: -webkit-transform 3s ease;
  transition: -webkit-transform 3s ease;
  transition: transform 3s ease;
  transition: transform 3s ease, -webkit-transform 3s ease; }
  .-step3b .neighborhood-diagram > .customer-property > .pictures,
  .-step3b .neighborhood-diagram > .yardly-office > .pictures {
    -webkit-transform: translate3d(-550px, 0, 0);
            transform: translate3d(-550px, 0, 0);
    -webkit-transition: -webkit-transform 3s ease;
    transition: -webkit-transform 3s ease;
    transition: transform 3s ease;
    transition: transform 3s ease, -webkit-transform 3s ease; }

.-step3b .neighborhood-diagram > .customer-property > .tall-grass {
  -webkit-transform: scaleY(0);
          transform: scaleY(0); }

.-step3b .neighborhood-diagram > .city-skyline {
  -webkit-transform: translate3d(-30px, 80px, 0) scale(0.5);
          transform: translate3d(-30px, 80px, 0) scale(0.5);
  -webkit-transition: -webkit-transform 3s ease;
  transition: -webkit-transform 3s ease;
  transition: transform 3s ease;
  transition: transform 3s ease, -webkit-transform 3s ease; }

.-step3c .neighborhood-diagram > .yardly-office > .pictures {
  -webkit-transform: translate3d(-590px, 100px, 0) scale(0.25);
          transform: translate3d(-590px, 100px, 0) scale(0.25);
  -webkit-transform-origin: center;
          transform-origin: center;
  -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
  transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
  transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
  transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44), -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44); }

.-step3c .neighborhood-diagram > .customer-property > .tall-grass {
  -webkit-transform: scaleY(0);
          transform: scaleY(0); }

.-step3c .neighborhood-diagram > .checkmark {
  -webkit-transform: translate3d(-100px, -120px, 0) scale(1);
          transform: translate3d(-100px, -120px, 0) scale(1);
  -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s;
  transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s;
  transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s;
  transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s, -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s; }

@media (min-width: 600px) {
  .neighborhood-diagram > .ground {
    -webkit-transform: translateX(-125px);
            transform: translateX(-125px); }
  .neighborhood-diagram > .lawn-mower,
  .neighborhood-diagram > .checkmark {
    -webkit-transform: translateX(-225px);
            transform: translateX(-225px); }
  .neighborhood-diagram > .sun {
    -webkit-transform: translate3d(-430px, 50px, 0) scale(0.75);
            transform: translate3d(-430px, 50px, 0) scale(0.75); } }

@media (min-width: 800px) {
  .neighborhood-diagram > .ground {
    -webkit-transform: translateX(0);
            transform: translateX(0); }
  .neighborhood-diagram > .lawn-mower {
    -webkit-transform: translateX(-225px);
            transform: translateX(-225px); }
  .neighborhood-diagram > .checkmark {
    -webkit-transform: translate3d(-140px, 100px, 0) scale(0.5);
            transform: translate3d(-140px, 100px, 0) scale(0.5);
    -webkit-transform-origin: center;
            transform-origin: center;
    -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44), -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44); }
  .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-100px, 40px, 0) scale(0.75);
            transform: translate3d(-100px, 40px, 0) scale(0.75); }
  .neighborhood-diagram > .sun {
    -webkit-transform: translate3d(-100px, 50px, 0) scale(0.75);
            transform: translate3d(-100px, 50px, 0) scale(0.75); }
  .neighborhood-diagram > .customer-property {
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px);
    -webkit-transition: none;
    transition: none; }
  .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-300px);
            transform: translateX(-300px); }
  .-step1b .neighborhood-diagram > .order-method-app {
    -webkit-transform: translate3d(-75px, -134px, 0);
            transform: translate3d(-75px, -134px, 0); }
  .-step1b .neighborhood-diagram > .order-method-web {
    -webkit-transform: translate3d(-130px, -120px, 0);
            transform: translate3d(-130px, -120px, 0); }
  .-step1b .neighborhood-diagram > .order-method-phone {
    -webkit-transform: translate3d(-40px, -90px, 0);
            transform: translate3d(-40px, -90px, 0); }
  .-step1c .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-100px, 40px, 0) scale(0.75);
            transform: translate3d(-100px, 40px, 0) scale(0.75); }
  .-step1c .neighborhood-diagram > .customer-property {
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px);
    -webkit-transition: none;
    transition: none; }
  .-step1c .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-300px);
            transform: translateX(-300px); }
  .-step1c .neighborhood-diagram > .order-method-app {
    -webkit-transform: translate3d(283px, -115px, 0);
            transform: translate3d(283px, -115px, 0);
    -webkit-transition: -webkit-transform 1s ease;
    transition: -webkit-transform 1s ease;
    transition: transform 1s ease;
    transition: transform 1s ease, -webkit-transform 1s ease; }
  .-step2a .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-100px, 40px, 0) scale(0.75);
            transform: translate3d(-100px, 40px, 0) scale(0.75); }
  .-step2a .neighborhood-diagram > .customer-property {
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px); }
  .-step2a .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-300px);
            transform: translateX(-300px); }
  .-step2a .neighborhood-diagram > .order-method-app {
    -webkit-transform: translate3d(283px, 0px, 0);
            transform: translate3d(283px, 0px, 0);
    -webkit-transition: none;
    transition: none; }
  .-step2b .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-100px, 40px, 0) scale(0.75);
            transform: translate3d(-100px, 40px, 0) scale(0.75); }
  .-step2b .neighborhood-diagram > .customer-property {
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px); }
  .-step2b .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-300px);
            transform: translateX(-300px); }
  .-step2b .neighborhood-diagram > .lawn-mower {
    -webkit-animation: none;
            animation: none;
    -webkit-transform: translateX(130px) scale(1);
            transform: translateX(130px) scale(1);
    -webkit-transition: -webkit-transform 2s ease-out;
    transition: -webkit-transform 2s ease-out;
    transition: transform 2s ease-out;
    transition: transform 2s ease-out, -webkit-transform 2s ease-out; }
  .-step2b .neighborhood-diagram > .customer-property > .tall-grass {
    -webkit-transform: scaleY(0);
            transform: scaleY(0);
    -webkit-transition: -webkit-transform 500ms ease 1.5s;
    transition: -webkit-transform 500ms ease 1.5s;
    transition: transform 500ms ease 1.5s;
    transition: transform 500ms ease 1.5s, -webkit-transform 500ms ease 1.5s; }
  .-step2c .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-100px, 40px, 0) scale(0.75);
            transform: translate3d(-100px, 40px, 0) scale(0.75); }
  .-step2c .neighborhood-diagram > .customer-property {
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px); }
  .-step2c .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-300px);
            transform: translateX(-300px); }
  .-step2c .neighborhood-diagram > .lawn-mower {
    -webkit-animation: none;
            animation: none;
    -webkit-transform: translateX(1000px);
            transform: translateX(1000px);
    -webkit-transform-origin: center;
            transform-origin: center;
    -webkit-transition: -webkit-transform 2s ease-in;
    transition: -webkit-transform 2s ease-in;
    transition: transform 2s ease-in;
    transition: transform 2s ease-in, -webkit-transform 2s ease-in; }
  .-step3a .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-100px, 40px, 0) scale(0.75);
            transform: translate3d(-100px, 40px, 0) scale(0.75); }
  .-step3a .neighborhood-diagram > .customer-property {
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px); }
  .-step3a .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-300px);
            transform: translateX(-300px); }
  .-step3a .neighborhood-diagram > .lawn-mower {
    -webkit-transition: none;
    transition: none; }
  .-step3a .neighborhood-diagram > .yardly-office > .pictures {
    -webkit-transform: translate3d(0px, -75px, 0);
            transform: translate3d(0px, -75px, 0);
    -webkit-transform-origin: center;
            transform-origin: center;
    -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44), -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44); }
  .-step3b .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-100px, 40px, 0) scale(0.75);
            transform: translate3d(-100px, 40px, 0) scale(0.75); }
  .-step3b .neighborhood-diagram > .customer-property {
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px); }
  .-step3b .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-300px);
            transform: translateX(-300px); }
  .-step3b .neighborhood-diagram > .yardly-office > .pictures {
    -webkit-transform: translate3d(-350px, 0px, 0);
            transform: translate3d(-350px, 0px, 0);
    -webkit-transform-origin: center;
            transform-origin: center;
    -webkit-transition: -webkit-transform 1s ease;
    transition: -webkit-transform 1s ease;
    transition: transform 1s ease;
    transition: transform 1s ease, -webkit-transform 1s ease; }
  .-step3c .neighborhood-diagram > .yardly-office > .pictures {
    -webkit-transform: translate3d(-400px, 100px, 0) scale(0.25);
            transform: translate3d(-400px, 100px, 0) scale(0.25);
    -webkit-transform-origin: center;
            transform-origin: center;
    -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44), -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44); }
  .-step3c .neighborhood-diagram > .customer-property > .tall-grass {
    -webkit-transform: scaleY(0);
            transform: scaleY(0); }
  .-step3c .neighborhood-diagram > .checkmark {
    -webkit-transform: translate3d(-60px, -120px, 0) scale(1);
            transform: translate3d(-60px, -120px, 0) scale(1);
    -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s;
    transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s;
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s;
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s, -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s; } }

@media (min-width: 1000px) {
  .neighborhood-diagram > .ground {
    -webkit-transform: translateX(0);
            transform: translateX(0); }
  .neighborhood-diagram > .lawn-mower {
    -webkit-transform: translateX(-225px);
            transform: translateX(-225px); }
  .neighborhood-diagram > .checkmark {
    -webkit-transform: translate3d(-140px, 100px, 0) scale(0.5);
            transform: translate3d(-140px, 100px, 0) scale(0.5);
    -webkit-transform-origin: center;
            transform-origin: center;
    -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44), -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44); }
  .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-140px, 0px, 0) scale(1);
            transform: translate3d(-140px, 0px, 0) scale(1); }
  .neighborhood-diagram > .sun {
    -webkit-transform: translate3d(-120px, 0px, 0) scale(1);
            transform: translate3d(-120px, 0px, 0) scale(1); }
  .neighborhood-diagram > .wind {
    -webkit-transform: translate3d(0, 0, 0) scale(1);
            transform: translate3d(0, 0, 0) scale(1); }
  .neighborhood-diagram > .clouds {
    -webkit-transform: translate3d(0, 0, 0) scale(1);
            transform: translate3d(0, 0, 0) scale(1); }
  .neighborhood-diagram > .customer-property {
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px);
    -webkit-transition: none;
    transition: none; }
  .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-125px);
            transform: translateX(-125px); }
  .-step1b .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-140px, 0px, 0) scale(1);
            transform: translate3d(-140px, 0px, 0) scale(1); }
  .-step1b .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-125px);
            transform: translateX(-125px); }
  .-step1c .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-140px, 0px, 0) scale(1);
            transform: translate3d(-140px, 0px, 0) scale(1); }
  .-step1c .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-125px);
            transform: translateX(-125px); }
  .-step1c .neighborhood-diagram > .order-method-app {
    -webkit-transform: translate3d(458px, -115px, 0);
            transform: translate3d(458px, -115px, 0);
    -webkit-transition: -webkit-transform 1s ease;
    transition: -webkit-transform 1s ease;
    transition: transform 1s ease;
    transition: transform 1s ease, -webkit-transform 1s ease; }
  .-step2a .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-140px, 0px, 0) scale(1);
            transform: translate3d(-140px, 0px, 0) scale(1); }
  .-step2a .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-125px);
            transform: translateX(-125px); }
  .-step2a .neighborhood-diagram > .order-method-app {
    -webkit-transform: translate3d(458px, 200px, 0);
            transform: translate3d(458px, 200px, 0);
    -webkit-transition: none;
    transition: none; }
  .-step2b .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-140px, 0px, 0) scale(1);
            transform: translate3d(-140px, 0px, 0) scale(1); }
  .-step2b .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-125px);
            transform: translateX(-125px); }
  .-step2b .neighborhood-diagram > .order-method-app {
    -webkit-transform: translate3d(458px, 200px, 0);
            transform: translate3d(458px, 200px, 0);
    -webkit-transition: -webkit-transform 1s ease;
    transition: -webkit-transform 1s ease;
    transition: transform 1s ease;
    transition: transform 1s ease, -webkit-transform 1s ease; }
  .-step2c .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-140px, 0px, 0) scale(1);
            transform: translate3d(-140px, 0px, 0) scale(1); }
  .-step2c .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-125px);
            transform: translateX(-125px); }
  .-step2c .neighborhood-diagram > .order-method-app {
    -webkit-transform: translate3d(458px, 200px, 0);
            transform: translate3d(458px, 200px, 0); }
  .-step3a .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-140px, 0px, 0) scale(1);
            transform: translate3d(-140px, 0px, 0) scale(1); }
  .-step3a .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-125px);
            transform: translateX(-125px); }
  .-step3b .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-140px, 0px, 0) scale(1);
            transform: translate3d(-140px, 0px, 0) scale(1); }
  .-step3b .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-125px);
            transform: translateX(-125px); }
    .-step3b .neighborhood-diagram > .yardly-office > .pictures {
      -webkit-transform: translate3d(-525px, 0px, 0);
              transform: translate3d(-525px, 0px, 0);
      -webkit-transform-origin: center;
              transform-origin: center;
      -webkit-transition: -webkit-transform 1s ease;
      transition: -webkit-transform 1s ease;
      transition: transform 1s ease;
      transition: transform 1s ease, -webkit-transform 1s ease; }
  .-step3c .neighborhood-diagram > .city-skyline {
    -webkit-transform: translate3d(-140px, 0px, 0) scale(1);
            transform: translate3d(-140px, 0px, 0) scale(1); }
  .-step3c .neighborhood-diagram > .yardly-office {
    -webkit-transform: translateX(-125px);
            transform: translateX(-125px); }
    .-step3c .neighborhood-diagram > .yardly-office > .pictures {
      -webkit-transform: translate3d(-575px, 100px, 0) scale(0.25);
              transform: translate3d(-575px, 100px, 0) scale(0.25);
      -webkit-transform-origin: center;
              transform-origin: center;
      -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
      transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
      transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
      transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44), -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44); }
  .-step3c .neighborhood-diagram > .customer-property > .tall-grass {
    -webkit-transform: scaleY(0);
            transform: scaleY(0); }
  .-step3c .neighborhood-diagram > .checkmark {
    -webkit-transform: translate3d(-60px, -120px, 0) scale(1);
            transform: translate3d(-60px, -120px, 0) scale(1);
    -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s;
    transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s;
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s;
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s, -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s; } }

@media (min-width: 1200px) {
  .neighborhood-diagram > .checkmark {
    -webkit-transform: translate3d(-140px, 100px, 0) scale(0.5);
            transform: translate3d(-140px, 100px, 0) scale(0.5);
    -webkit-transform-origin: center;
            transform-origin: center;
    -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44), -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44); }
  .neighborhood-diagram > .ground,
  .neighborhood-diagram > .sun,
  .neighborhood-diagram > .wind,
  .neighborhood-diagram > .clouds,
  .neighborhood-diagram > .city-skyline,
  .neighborhood-diagram > .customer-property,
  .neighborhood-diagram > .yardly-office {
    -webkit-transform: translate3d(0, 0, 0) scale(1);
            transform: translate3d(0, 0, 0) scale(1); }
  .-step1b .neighborhood-diagram > .city-skyline,
  .-step1b .neighborhood-diagram > .customer-property,
  .-step1b .neighborhood-diagram > .yardly-office {
    -webkit-transform: translate3d(0, 0, 0) scale(1);
            transform: translate3d(0, 0, 0) scale(1); }
  .-step1b .neighborhood-diagram > .order-method-app {
    -webkit-transform: translate3d(25px, -134px, 0);
            transform: translate3d(25px, -134px, 0); }
  .-step1b .neighborhood-diagram > .order-method-web {
    -webkit-transform: translate3d(-30px, -120px, 0);
            transform: translate3d(-30px, -120px, 0); }
  .-step1b .neighborhood-diagram > .order-method-phone {
    -webkit-transform: translate3d(60px, -90px, 0);
            transform: translate3d(60px, -90px, 0); }
  .-step1c .neighborhood-diagram > .city-skyline,
  .-step1c .neighborhood-diagram > .customer-property,
  .-step1c .neighborhood-diagram > .yardly-office {
    -webkit-transform: translate3d(0, 0, 0) scale(1);
            transform: translate3d(0, 0, 0) scale(1); }
  .-step1c .neighborhood-diagram > .order-method-app {
    -webkit-transform: translate3d(582px, -115px, 0);
            transform: translate3d(582px, -115px, 0);
    -webkit-transition: -webkit-transform 1s ease;
    transition: -webkit-transform 1s ease;
    transition: transform 1s ease;
    transition: transform 1s ease, -webkit-transform 1s ease; }
  .-step2a .neighborhood-diagram > .city-skyline,
  .-step2a .neighborhood-diagram > .customer-property,
  .-step2a .neighborhood-diagram > .yardly-office {
    -webkit-transform: translate3d(0, 0, 0) scale(1);
            transform: translate3d(0, 0, 0) scale(1); }
  .-step2a .neighborhood-diagram > .order-method-app {
    -webkit-transform: translate3d(582px, 200px, 0);
            transform: translate3d(582px, 200px, 0); }
  .-step2b .neighborhood-diagram > .city-skyline,
  .-step2b .neighborhood-diagram > .customer-property,
  .-step2b .neighborhood-diagram > .yardly-office {
    -webkit-transform: translate3d(0, 0, 0) scale(1);
            transform: translate3d(0, 0, 0) scale(1); }
  .-step2b .neighborhood-diagram > .lawn-mower {
    -webkit-animation: none;
            animation: none;
    -webkit-transform: translateX(230px) scale(1);
            transform: translateX(230px) scale(1);
    -webkit-transition: -webkit-transform 2s ease-out;
    transition: -webkit-transform 2s ease-out;
    transition: transform 2s ease-out;
    transition: transform 2s ease-out, -webkit-transform 2s ease-out; }
  .-step2c .neighborhood-diagram > .city-skyline,
  .-step2c .neighborhood-diagram > .customer-property,
  .-step2c .neighborhood-diagram > .yardly-office {
    -webkit-transform: translate3d(0, 0, 0) scale(1);
            transform: translate3d(0, 0, 0) scale(1); }
  .-step3a .neighborhood-diagram > .city-skyline,
  .-step3a .neighborhood-diagram > .customer-property,
  .-step3a .neighborhood-diagram > .yardly-office {
    -webkit-transform: translate3d(0, 0, 0) scale(1);
            transform: translate3d(0, 0, 0) scale(1); }
  .-step3b .neighborhood-diagram > .city-skyline,
  .-step3b .neighborhood-diagram > .customer-property,
  .-step3b .neighborhood-diagram > .yardly-office {
    -webkit-transform: translate3d(0, 0, 0) scale(1);
            transform: translate3d(0, 0, 0) scale(1); }
  .-step3b .neighborhood-diagram > .yardly-office > .pictures {
    -webkit-transform: translate3d(-525px, 0px, 0);
            transform: translate3d(-525px, 0px, 0);
    -webkit-transform-origin: center;
            transform-origin: center;
    -webkit-transition: -webkit-transform 1s ease;
    transition: -webkit-transform 1s ease;
    transition: transform 1s ease;
    transition: transform 1s ease, -webkit-transform 1s ease; }
  .-step3b .neighborhood-diagram > .checkmark {
    -webkit-transform: translate3d(-20px, 0px, 0) scale(1);
            transform: translate3d(-20px, 0px, 0) scale(1);
    -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s;
    transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s;
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s;
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s, -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s; }
  .-step3c .neighborhood-diagram > .city-skyline,
  .-step3c .neighborhood-diagram > .customer-property,
  .-step3c .neighborhood-diagram > .yardly-office {
    -webkit-transform: translate3d(0, 0, 0) scale(1);
            transform: translate3d(0, 0, 0) scale(1); }
  .-step3c .neighborhood-diagram > .yardly-office > .pictures {
    -webkit-transform: translate3d(-575px, 100px, 0) scale(0.25);
            transform: translate3d(-575px, 100px, 0) scale(0.25);
    -webkit-transform-origin: center;
            transform-origin: center;
    -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44);
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44), -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44); }
  .-step3c .neighborhood-diagram > .customer-property > .tall-grass {
    -webkit-transform: scaleY(0);
            transform: scaleY(0); }
  .-step3c .neighborhood-diagram > .checkmark {
    -webkit-transform: translate3d(40px, -120px, 0) scale(1);
            transform: translate3d(40px, -120px, 0) scale(1);
    -webkit-transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s;
    transition: -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s;
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s;
    transition: transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s, -webkit-transform 1s cubic-bezier(0.87, -0.41, 0.19, 1.44) 0.5s; } }

@-webkit-keyframes floating-clouds {
  from {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0); }
  to {
    -webkit-transform: translate3d(1000px, 0, 0);
            transform: translate3d(1000px, 0, 0); } }

@keyframes floating-clouds {
  from {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0); }
  to {
    -webkit-transform: translate3d(1000px, 0, 0);
            transform: translate3d(1000px, 0, 0); } }

@-webkit-keyframes sending-signals {
  0% {
    opacity: 0; }
  50% {
    opacity: 1; }
  100% {
    opacity: 0; } }

@keyframes sending-signals {
  0% {
    opacity: 0; }
  50% {
    opacity: 1; }
  100% {
    opacity: 0; } }

@-webkit-keyframes mowing-lawns {
  0% {
    -webkit-transform: translateX(-130px) scaleX(1);
            transform: translateX(-130px) scaleX(1);
    -webkit-transform-origin: center;
            transform-origin: center; }
  50% {
    -webkit-transform: translateX(100px) scaleX(1);
            transform: translateX(100px) scaleX(1);
    -webkit-transform-origin: center;
            transform-origin: center; }
  51% {
    -webkit-transform: translateX(90px) scaleX(-1);
            transform: translateX(90px) scaleX(-1);
    -webkit-transform-origin: center;
            transform-origin: center; }
  100% {
    -webkit-transform: translateX(-130px) scaleX(-1);
            transform: translateX(-130px) scaleX(-1);
    -webkit-transform-origin: center;
            transform-origin: center; } }

@keyframes mowing-lawns {
  0% {
    -webkit-transform: translateX(-130px) scaleX(1);
            transform: translateX(-130px) scaleX(1);
    -webkit-transform-origin: center;
            transform-origin: center; }
  50% {
    -webkit-transform: translateX(100px) scaleX(1);
            transform: translateX(100px) scaleX(1);
    -webkit-transform-origin: center;
            transform-origin: center; }
  51% {
    -webkit-transform: translateX(90px) scaleX(-1);
            transform: translateX(90px) scaleX(-1);
    -webkit-transform-origin: center;
            transform-origin: center; }
  100% {
    -webkit-transform: translateX(-130px) scaleX(-1);
            transform: translateX(-130px) scaleX(-1);
    -webkit-transform-origin: center;
            transform-origin: center; } }

</style>
<div class="title m-b-md">
    <center>Tidak dapat diakses, terjadi kesalahan!</center>
</div>
<main class="page-layout landing-page page-layout">
<section class=how-it-works id=how-it-works><svg version=1.1 class="diagram neighborhood-diagram" xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink x=0px y=0px viewbox="0 50 200 150"><g class=city-skyline><path class=shape d="M823.5,181l-16.2-20.6l-10.5,12.5l-14.3-18.5L767.2,174l-8.8-9.9L743,183.9V99h-31v62h-4v8h-1 v11h-6V52h-11v-5h-13v5h-12v114h-3v18h-2v-11h-1v-14h-17v14h-3v-67.6l-9.8-17.8L613.1,105H609v78h-3v-17h-5v-3h-2v-7h-20v-6h-5V66 h-8v-3h-19v1h-8v95h-2v-5h-9v-4h-6v4h-3v4h-1v-58h-2V87h-2v-6h-0.7c0,0-4.1-4.9-12.4-4.9c-8.3,0-11.1,4.9-11.1,4.9H484v6h-1v15h-1 v57h-8v10h-4V87h-7v-4h-14v4h-6v82h-4v-15h-9v11h-2V76h-32v92h-3v-7h-9v9h-2v-14h-16.9l-6.2-4h-6.7c-1.4-5-7.2-7.7-15.2-8.6V140h-7 v3.4c-7,0.8-12.6,3.6-14,8.6h-6v-14h-4.6c-0.7-9-4.4-15.3-9.4-17.8v-5.6V107l-5-6.4l-5,6.4v7.6v5.6c-4,2.5-7.7,8.8-8.4,17.8H272v18 h-47v25h-25v19h633v-19H823.5z"></path></g><g class=sun><circle class=shape cx=874.5 cy=44.5 r=15.5></circle><path class=line d=M872.1,24.1c-9.4,1.1-16.8,8.5-18,17.9></path><path class=line d=M877,64.9c9.4-1.1,16.8-8.5,18-17.9></path><path class=line d=M894.9,42c-1.1-9.4-8.5-16.8-17.9-18></path><path class=line d=M854,47c1.1,9.4,8.5,16.8,17.9,18></path><path class=line d=M884,44.5c0-5.2-4.3-9.5-9.5-9.5></path></g><g class=wind><g class=gust><line class=line x1=210 y1=80 x2=219 y2=80></line><line class=line x1=185 y1=64 x2=200 y2=64></line><line class=line x1=197 y1=58 x2=207 y2=58></line><line class=line x1=219 y1=58 x2=221 y2=58></line><line class=line x1=225 y1=58 x2=227 y2=58></line><circle class=shape cx=213 cy=57 r=3></circle></g><g class=gust><line class=line x1=-21.5 y1=87.5 x2=-6.5 y2=87.5></line><line class=line x1=-9.5 y1=82.5 x2=1.5 y2=82.5></line><circle class=shape cx=12 cy=86 r=3></circle></g><g class=gust><line class=line x1=117 y1=98 x2=133 y2=98></line><line class=line x1=141 y1=108 x2=126 y2=108></line><line class=line x1=138 y1=103 x2=148 y2=103></line><line class=line x1=152 y1=103 x2=155 y2=103></line><line class=line x1=167 y1=103 x2=171 y2=103></line><line class=line x1=175 y1=103 x2=178 y2=103></line></g><g class=gust><line class=line x1=349 y1=81 x2=364 y2=81></line><line class=line x1=357 y1=92 x2=372 y2=92></line><line class=line x1=370 y1=86 x2=379 y2=86></line><line class=line x1=385 y1=86 x2=387 y2=86></line><line class=line x1=401 y1=86 x2=403 y2=86></line></g><g class=gust><line class=line x1=437 y1=57 x2=439 y2=57></line><line class=line x1=443 y1=57 x2=445 y2=57></line><line class=line x1=474 y1=56 x2=488 y2=56></line><line class=line x1=485 y1=50 x2=495 y2=50></line><line class=line x1=486 y1=62 x2=488 y2=62></line><line class=line x1=492 y1=62 x2=494 y2=62></line><circle class=shape cx=462 cy=56 r=3></circle></g><g class=gust><line class=line x1=486 y1=101 x2=489 y2=101></line><line class=line x1=493 y1=101 x2=503 y2=101></line><line class=line x1=508 y1=101 x2=510 y2=101></line><line class=line x1=481 y1=107 x2=496 y2=107></line></g><g class=gust><line class=line x1=574 y1=92 x2=589 y2=92></line><circle class=shape cx=602.5 cy=84.5 r=2.5></circle><line class=line x1=586 y1=85 x2=596 y2=85></line><line class=line x1=609 y1=85 x2=611 y2=85></line><line class=line x1=615 y1=85 x2=617 y2=85></line></g><g class=gust><line class=line x1=695 y1=61 x2=705 y2=61></line><line class=line x1=702 y1=55 x2=717 y2=55></line><line class=line x1=696 y1=50 x2=698 y2=50></line><line class=line x1=702 y1=50 x2=704 y2=50></line></g><g class=gust><line class=line x1=702 y1=112 x2=716 y2=112></line><line class=line x1=713 y1=106 x2=723 y2=106></line><line class=line x1=750 y1=110 x2=760 y2=110></line><line class=line x1=757 y1=104 x2=772 y2=104></line><line class=line x1=750 y1=99 x2=752 y2=99></line><line class=line x1=756 y1=99 x2=758 y2=99></line><circle class=shape cx=738 cy=101 r=3></circle></g><g class=gust><line class=line x1=973 y1=96 x2=988 y2=96></line><circle class=shape cx=1001 cy=90 r=3></circle><line class=line x1=985 y1=90 x2=995 y2=90></line><line class=line x1=1007 y1=90 x2=1009 y2=90></line><line class=line x1=1013 y1=90 x2=1015 y2=90></line><line class=line x1=1009 y1=115 x2=1018 y2=115></line><line class=line x1=997 y1=120 x2=1011 y2=120></line><line class=line x1=1009 y1=125 x2=1012 y2=125></line><line class=line x1=1016 y1=125 x2=1018 y2=125></line></g></g><g class=clouds><g class="cloud cloud-small"><path class=shape d="M374,30c0-3.4-2.5-6.3-5.7-6.9c0.2-0.5,0.3-1.1,0.3-1.7c0-3-2.4-5.5-5.4-5.5 c-1.2,0-2.3,0.4-3.2,1c-1.4-2.9-4.3-4.9-7.7-4.9c-4.7,0-8.6,3.8-8.6,8.6c0,0.7,0.1,1.4,0.2,2c-2.9,1-4.9,3.8-4.9,7 c0,4.1,3.3,7.4,7.4,7.4H367C370.9,37,374,33.9,374,30z"></path></g><g class="cloud cloud-small"><path class=shape d="M690,63c0-3.4-2.5-6.3-5.7-6.9c0.2-0.5,0.3-1.1,0.3-1.7c0-3-2.4-5.5-5.4-5.5 c-1.2,0-2.3,0.4-3.2,1c-1.4-2.9-4.3-4.9-7.7-4.9c-4.7,0-8.6,3.8-8.6,8.6c0,0.7,0.1,1.4,0.2,2c-2.9,1-4.9,3.8-4.9,7 c0,4.1,3.3,7.4,7.4,7.4H683C686.9,70,690,66.9,690,63z"></path></g><g class="cloud cloud-small"><path class=shape d="M-626,30c0-3.4-2.5-6.3-5.7-6.9c0.2-0.5,0.3-1.1,0.3-1.7c0-3-2.4-5.5-5.4-5.5 c-1.2,0-2.3,0.4-3.2,1c-1.4-2.9-4.3-4.9-7.7-4.9c-4.7,0-8.6,3.8-8.6,8.6c0,0.7,0.1,1.4,0.2,2c-2.9,1-4.9,3.8-4.9,7 c0,4.1,3.3,7.4,7.4,7.4h20.6C-629.1,37-626,33.9-626,30z"></path></g><g class="cloud cloud-small"><path class=shape d="M-310,63c0-3.4-2.5-6.3-5.7-6.9c0.2-0.5,0.3-1.1,0.3-1.7c0-3-2.4-5.5-5.4-5.5 c-1.2,0-2.3,0.4-3.2,1c-1.4-2.9-4.3-4.9-7.7-4.9c-4.7,0-8.6,3.8-8.6,8.6c0,0.7,0.1,1.4,0.2,2c-2.9,1-4.9,3.8-4.9,7 c0,4.1,3.3,7.4,7.4,7.4h20.6C-313.1,70-310,66.9-310,63z"></path></g><g class="cloud cloud-large"><path class=shape d="M114,71c5,0,9-4,9-9c0-4.4-3.2-8.1-7.3-8.8c0.2-0.7,0.3-1.4,0.3-2.2c0-3.9-3.1-7-7-7 c-1.5,0-2.9,0.5-4.1,1.3c-1.8-3.7-5.5-6.3-9.9-6.3c-6.1,0-11,4.9-11,11c0,0.9,0.1,1.7,0.3,2.6c-3.7,1.3-6.3,4.8-6.3,8.9 c0,5.2,4.3,9.5,9.5,9.5H114z"></path></g><g class="cloud cloud-large"><path class=shape d="M315,100c5,0,9-4,9-9c0-4.4-3.2-8.1-7.3-8.8c0.2-0.7,0.3-1.4,0.3-2.2c0-3.9-3.1-7-7-7 c-1.5,0-2.9,0.5-4.1,1.3c-1.8-3.7-5.5-6.3-9.9-6.3c-6.1,0-11,4.9-11,11c0,0.9,0.1,1.7,0.3,2.6c-3.7,1.3-6.3,4.8-6.3,8.9 c0,5.2,4.3,9.5,9.5,9.5H315z"></path></g><g class="cloud cloud-large"><path class=shape d="M950,91c5,0,9-4,9-9c0-4.4-3.2-8.1-7.3-8.8c0.2-0.7,0.3-1.4,0.3-2.2c0-3.9-3.1-7-7-7 c-1.5,0-2.9,0.5-4.1,1.3c-1.8-3.7-5.5-6.3-9.9-6.3c-6.1,0-11,4.9-11,11c0,0.9,0.1,1.7,0.3,2.6c-3.7,1.3-6.3,4.8-6.3,8.9 c0,5.2,4.3,9.5,9.5,9.5H950z"></path></g><g class="cloud cloud-large"><path class=shape d="M-886,71c5,0,9-4,9-9c0-4.4-3.2-8.1-7.3-8.8c0.2-0.7,0.3-1.4,0.3-2.2c0-3.9-3.1-7-7-7 c-1.5,0-2.9,0.5-4.1,1.3c-1.8-3.7-5.5-6.3-9.9-6.3c-6.1,0-11,4.9-11,11c0,0.9,0.1,1.7,0.3,2.6c-3.7,1.3-6.3,4.8-6.3,8.9 c0,5.2,4.3,9.5,9.5,9.5H-886z"></path></g><g class="cloud cloud-large"><path class=shape d="M-685,100c5,0,9-4,9-9c0-4.4-3.2-8.1-7.3-8.8c0.2-0.7,0.3-1.4,0.3-2.2c0-3.9-3.1-7-7-7 c-1.5,0-2.9,0.5-4.1,1.3c-1.8-3.7-5.5-6.3-9.9-6.3c-6.1,0-11,4.9-11,11c0,0.9,0.1,1.7,0.3,2.6c-3.7,1.3-6.3,4.8-6.3,8.9 c0,5.2,4.3,9.5,9.5,9.5H-685z"></path></g><g class="cloud cloud-large"><path class=shape d="M-50,91c5,0,9-4,9-9c0-4.4-3.2-8.1-7.3-8.8c0.2-0.7,0.3-1.4,0.3-2.2c0-3.9-3.1-7-7-7 c-1.5,0-2.9,0.5-4.1,1.3c-1.8-3.7-5.5-6.3-9.9-6.3c-6.1,0-11,4.9-11,11c0,0.9,0.1,1.7,0.3,2.6c-3.7,1.3-6.3,4.8-6.3,8.9 c0,5.2,4.3,9.5,9.5,9.5H-50z"></path></g></g><g class=order-method-phone><circle class=shape cx=205 cy=236 r=24></circle><g class=handset><path class=shape d="M195.8,222.4c-1-1-2,0-2,0l-5,5c-2,2,0,5,3,8l13,13c5,4,7,6,9,4l5-5c0,0,1-1,0-2s-6-3-6-3 l-4,1l-10-10l1-5C199.8,228.4,196.8,223.4,195.8,222.4z"></path><path class="shape hightlight" d=M189.2,227c-3.2,3-0.2,6,2.8,9l13,13c5,4,7,6,9.2,3L189.2,227z></path></g></g><g class=order-method-web><circle class=shape cx=205 cy=236 r=24></circle><g class=computer><polygon class="shape stand" points="208,250 210,251 210,253 200,253 200,251 202,250 202,247 208,247"></polygon><rect class="shape back" x=189 y=225 width=33 height=22></rect><rect class="shape strip" x=189 y=245 width=33 height=2></rect><rect class="shape screen" x=189 y=225 width=33 height=18></rect><g class=map><rect class=shape x=190 y=226 width=31 height=16></rect></g><g class=location-marker><path class=shape d="M208.2,232c0-1.7-1.3-3-3-3s-3,1.3-3,3c0,2,3,6,3,6S208.2,234,208.2,232z M205.2,231 c0.6,0,1,0.4,1,1s-0.4,1-1,1s-1-0.4-1-1S204.7,231,205.2,231z"></path></g></g></g><g class=order-method-app><circle class=shape cx=205 cy=236 r=24></circle><g class=phone><path class="shape back" d="M197,255c-1,0-2-1-2-2s0-33,0-34s1-2,2-2s16,0,17,0s2,1,2,2s0,32.8,0,34s-1,2-2,2 S198,255,197,255z"></path><rect class="shape screen" x=196 y=221 width=19 height=28></rect><circle class="shape button" cx=206 cy=252 r=2></circle><line class="line speaker" x1=201 y1=219 x2=206 y2=219></line><line class="line camera" x1=209 y1=219 x2=209 y2=219></line><g class=map><rect class=shape x=197 y=222 width=17 height=26></rect></g><g class=location-marker><path class=shape d="M209,231c0-1.7-1.3-3-3-3s-3,1.3-3,3c0,2,3,6,3,6S209,233,209,231z M206,230 c0.6,0,1,0.4,1,1s-0.4,1-1,1s-1-0.4-1-1S205.4,230,206,230z"></path></g><rect class="shape order-button" x=199 y=242 width=13 height=4></rect></g></g><g class=checkmark><circle class=shape cx=202.5 cy=234 r=21.5></circle><polyline class=line points="190.7,234 199.7,243 215.7,227"></polyline></g><g class=yardly-office><g class=pictures><g class=photo><rect class=shape x=769 y=111 width=43 height=29></rect></g><g class=photo><rect class=shape x=765 y=107 width=43 height=29></rect></g><g class=ground><rect class=shape x=766 y=132 width=41 height=3></rect></g><g class=tree-small><circle class=shape cx=803 cy=120.2 r=5></circle><line class=line x1=803 y1=119.8 x2=803 y2=132></line><line class=line x1=803 y1=122.2 x2=800 y2=120.2></line><line class=line x1=801.5 y1=118.8 x2=801 y2=120.8></line><line class=line x1=803 y1=121.2 x2=806 y2=118.8></line></g><g class="grass short-grass"><line class=line x1=765.5 y1=132 x2=765.5 y2=130></line><line class=line x1=768.5 y1=132 x2=768.5 y2=130></line><line class=line x1=771.5 y1=132 x2=771.5 y2=130></line><line class=line x1=774.5 y1=132 x2=774.5 y2=130></line><line class=line x1=777.5 y1=132 x2=777.5 y2=130></line><line class=line x1=780.5 y1=132 x2=780.5 y2=130></line><line class=line x1=783.5 y1=132 x2=783.5 y2=130></line><line class=line x1=786.5 y1=132 x2=786.5 y2=130></line><line class=line x1=789.5 y1=132 x2=789.5 y2=130></line><line class=line x1=792.5 y1=132 x2=792.5 y2=130></line><line class=line x1=795.5 y1=132 x2=795.5 y2=130></line><line class=line x1=798.5 y1=132 x2=798.5 y2=130></line></g></g><g class=antenna><polyline class=line points="808,101 808,82 800.5,74.5"></polyline><circle class=shape cx=800.5 cy=74.5 r=2.5></circle><g class="radio-waves -right"><path class=line d=M804.4,70.6c1,1,1.6,2.4,1.6,3.9></path><path class=line d=M807.2,67.8c1.7,1.7,2.8,4.1,2.8,6.7></path></g><g class="radio-waves -left"><path class=line d=M796.6,78.4c-1-1-1.6-2.4-1.6-3.9s0.6-2.9,1.6-3.9></path><path class=line d=M793.8,81.2c-1.7-1.7-2.8-4.1-2.8-6.7s1.1-5,2.8-6.7></path></g></g><path class=shape d=M762,99v82h52V99h-17c0-5-4-9-9-9s-9,4-9,9H762z></path><g class=window><rect x=790 y=154 class=shape width=6 height=18></rect><line class=line x1=790 y1=160 x2=796 y2=160></line></g><g class=window><rect x=780 y=154 class=shape width=6 height=18></rect><line class=line x1=780 y1=160 x2=786 y2=160></line></g><g class=window><rect x=770 y=154 class=shape width=6 height=18></rect><line class=line x1=770 y1=160 x2=776 y2=160></line></g><g class=window><rect x=800 y=154 class=shape width=6 height=18></rect><line class=line x1=800 y1=160 x2=806 y2=160></line></g><line class=line x1=762 y1=104 x2=814 y2=104></line><line class=line x1=762 y1=109 x2=814 y2=109></line><line class=line x1=762 y1=149 x2=814 y2=149></line><line class=line x1=762 y1=176 x2=814 y2=176></line><line class=line x1=763 y1=149 x2=769 y2=141></line><line class=line x1=772 y1=149 x2=778 y2=141></line><line class=line x1=781 y1=149 x2=787 y2=141></line><line class=line x1=790 y1=149 x2=796 y2=141></line><line class=line x1=799 y1=149 x2=805 y2=141></line><line class=line x1=808 y1=149 x2=814 y2=141></line><line class=line x1=762 y1=141 x2=814 y2=141></line><line class=line x1=762 y1=128 x2=767 y2=128></line><line class=line x1=762 y1=131 x2=765 y2=131></line><line class=line x1=762 y1=137 x2=766 y2=137></line><g class=yardly-logo><polygon class=shape points="797,114 796,114 789,121 788,121 781,114 780,114 779,115 779,116 786,123 787,125 787,135 788,136 789,136 790,135 790,125 791,123 798,116 798,115"></polygon></g><g class="tree tree-small"><circle class=shape cx=842 cy=157.5 r=10></circle><line class=line x1=842 y1=156.5 x2=842 y2=181></line><line class=line x1=842 y1=161.5 x2=836 y2=157.5></line><line class=line x1=839 y1=154.5 x2=838 y2=158.5></line><line class=line x1=842 y1=159.5 x2=848 y2=154.5></line></g></g><g class=customer-property><g class=customer-house><g class=wall><rect class=shape x=186 y=161 width=43 height=20></rect></g><g class=roof><polygon class=shape points="189,152 226,152 232,161 183,161"></polygon><line class=line x1=190 y1=161.5 x2=190 y2=165></line><line class=line x1=194 y1=152 x2=191 y2=157></line><line class=line x1=200 y1=152 x2=197 y2=157></line><line class=line x1=206 y1=152 x2=203 y2=157></line><line class=line x1=212 y1=152 x2=209 y2=157></line><line class=line x1=218 y1=152 x2=215 y2=157></line><line class=line x1=224 y1=152 x2=221 y2=157></line><line class=line x1=210 y1=161.5 x2=210 y2=165></line><line class=line x1=195 y1=161.5 x2=195 y2=165></line><line class=line x1=215 y1=161.5 x2=215 y2=165></line><line class=line x1=200 y1=161.5 x2=200 y2=165></line><line class=line x1=220 y1=161.5 x2=220 y2=165></line><line class=line x1=205 y1=161.5 x2=205 y2=165></line><line class=line x1=225 y1=161.5 x2=225 y2=165></line></g><g class=window><rect class=shape x=217 y=168 width=7 height=9></rect><line class=line x1=217 y1=172 x2=224 y2=172></line></g><g class=window><rect class=shape x=191 y=168 width=7 height=9></rect><line class=line x1=191 y1=172 x2=198 y2=172></line></g><g class=door><rect class=shape x=204 y=170 width=7 height=11></rect></g></g><g class=bush><path class=shape d="M170.2,181c-1.7,0-3-1.3-3-3c0-1.5,1.1-2.7,2.4-2.9c-0.1-0.2-0.1-0.5-0.1-0.7c0-1.3,1-2.3,2.3-2.3 c0.5,0,1,0.2,1.4,0.4c0.6-1.2,1.8-2.1,3.3-2.1c2,0,3.7,1.6,3.7,3.7c0,0.3,0,0.6-0.1,0.9c1.2,0.4,2.1,1.6,2.1,3 c0,1.7-1.4,3.2-3.2,3.2H170.2z"></path></g><g class="grass tall-grass"><line class=line x1=236 y1=181 x2=236 y2=174></line><line class=line x1=276 y1=181 x2=276 y2=177></line><line class=line x1=264 y1=181 x2=264 y2=177></line><line class=line x1=252 y1=181 x2=252 y2=177></line><line class=line x1=292 y1=181 x2=292 y2=177></line><line class=line x1=244 y1=181 x2=244 y2=172></line><line class=line x1=284 y1=181 x2=284 y2=172></line><line class=line x1=272 y1=181 x2=272 y2=172></line><line class=line x1=256 y1=181 x2=256 y2=171></line><line class=line x1=296 y1=181 x2=296 y2=173></line><line class=line x1=240 y1=176 x2=240 y2=170></line><line class=line x1=280 y1=176 x2=280 y2=170></line><line class=line x1=260 y1=175 x2=260 y2=172></line><line class=line x1=248 y1=181 x2=248 y2=171></line><line class=line x1=288 y1=181 x2=288 y2=171></line><line class=line x1=268 y1=181 x2=268 y2=170></line><line class=line x1=276 y1=174 x2=276 y2=171></line><line class=line x1=264 y1=174 x2=264 y2=171></line><line class=line x1=252 y1=174 x2=252 y2=170></line><line class=line x1=292 y1=174 x2=292 y2=170></line><line class=line x1=240 y1=181 x2=240 y2=179></line><line class=line x1=280 y1=181 x2=280 y2=179></line><line class=line x1=260 y1=181 x2=260 y2=178></line><line class=line x1=300 y1=181 x2=300 y2=178></line></g><g class="grass short-grass"><line class=line x1=236 y1=181 x2=236 y2=178></line><line class=line x1=276 y1=181 x2=276 y2=178></line><line class=line x1=264 y1=181 x2=264 y2=178></line><line class=line x1=252 y1=181 x2=252 y2=178></line><line class=line x1=292 y1=181 x2=292 y2=178></line><line class=line x1=244 y1=181 x2=244 y2=178></line><line class=line x1=284 y1=181 x2=284 y2=178></line><line class=line x1=272 y1=181 x2=272 y2=178></line><line class=line x1=256 y1=181 x2=256 y2=178></line><line class=line x1=296 y1=181 x2=296 y2=178></line><line class=line x1=248 y1=181 x2=248 y2=178></line><line class=line x1=288 y1=181 x2=288 y2=178></line><line class=line x1=268 y1=181 x2=268 y2=178></line><line class=line x1=240 y1=181 x2=240 y2=178></line><line class=line x1=280 y1=181 x2=280 y2=178></line><line class=line x1=260 y1=181 x2=260 y2=178></line><line class=line x1=300 y1=181 x2=300 y2=178></line></g><g class="tree tree-large"><ellipse class=shape cx=160 cy=153 rx=11.5 ry=11.5></ellipse><line class=line x1=160 y1=151.9 x2=160 y2=180></line><line class=line x1=160 y1=157.6 x2=153.1 y2=153></line><line class=line x1=156.6 y1=149.6 x2=155.4 y2=154.2></line><line class=line x1=160 y1=155.3 x2=166.9 y2=149.6></line></g><g class="tree tree-small"><circle class=shape cx=144 cy=157.5 r=10></circle><line class=line x1=144 y1=156.5 x2=144 y2=181></line><line class=line x1=144 y1=161.5 x2=138 y2=157.5></line><line class=line x1=141 y1=154.5 x2=140 y2=158.5></line><line class=line x1=144 y1=159.5 x2=150 y2=154.5></line></g><g class="tree tree-small"><circle class=shape cx=313 cy=157.5 r=10></circle><line class=line x1=313 y1=156.5 x2=313 y2=181></line><line class=line x1=313 y1=161.5 x2=307 y2=157.5></line><line class=line x1=310 y1=154.5 x2=309 y2=158.5></line><line class=line x1=313 y1=159.5 x2=319 y2=154.5></line></g></g><g class=lawn-mower><path class="shape body" d=M57,170c0-4,1.8-4,4-4s4,0,4,4H57z></path><path class="shape cap" d=M76,178H46v-6c0-1,1-2,2-2h26c1,0,2,1,2,2V178z></path><circle class="shape wheel" cx=52.5 cy=176.5 r=3.5></circle><circle class="shape wheel" cx=69.5 cy=176.5 r=3.5></circle><polyline class="line handle" points="47,169 42,160 39,160"></polyline></g><g class=ground><rect class="shape mask" x=0 y=180 width=1000 height=16></rect><rect class=shape x=5 y=185 width=1033 height=15></rect><line class=line x1=1040 y1=181 x2=0 y2=181></line><line class=line x1=1040 y1=195 x2=0 y2=195></line></g></svg>
</main>
<script>
  /******/ (function(modules) { // webpackBootstrap
/******/  // The module cache
/******/  var installedModules = {};

/******/  // The require function
/******/  function __webpack_require__(moduleId) {

/******/    // Check if module is in cache
/******/    if(installedModules[moduleId])
/******/      return installedModules[moduleId].exports;

/******/    // Create a new module (and put it into the cache)
/******/    var module = installedModules[moduleId] = {
/******/      exports: {},
/******/      id: moduleId,
/******/      loaded: false
/******/    };

/******/    // Execute the module function
/******/    modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/    // Flag the module as loaded
/******/    module.loaded = true;

/******/    // Return the exports of the module
/******/    return module.exports;
/******/  }


/******/  // expose the modules object (__webpack_modules__)
/******/  __webpack_require__.m = modules;

/******/  // expose the module cache
/******/  __webpack_require__.c = installedModules;

/******/  // __webpack_public_path__
/******/  __webpack_require__.p = "";

/******/  // Load entry module and return exports
/******/  return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

  'use strict';

  __webpack_require__(1);

/***/ },
/* 1 */
/***/ function(module, exports, __webpack_require__) {

  'use strict';

  var _utils = __webpack_require__(2);

  __webpack_require__(3);

  (function () {
    /**
      * Animation sequence
      **/

    // TODO: set this to true before deployment
    var isTimerSet = true;
    var index = 0;
    var timer = void 0;
    var steps = [];
    var viewFlag = true;

    var setSteps = function setSteps() {
      if (window.screen.width < 800) {
        steps = [{ class: '-step1a', duration: 1000 }, { class: '-step1b', duration: 3000 }, { class: '-step1c', duration: 3500 }, { class: '-step2a', duration: 2000 }, { class: '-step2b', duration: 3000 }, { class: '-step2c', duration: 4000 }, { class: '-step3a', duration: 3000 }, { class: '-step3b', duration: 3000 }, { class: '-step3c', duration: 3000 }];
      } else {
        steps = [{ class: '-step1a', duration: 1000 }, { class: '-step1b', duration: 2000 }, { class: '-step1c', duration: 3000 }, { class: '-step2a', duration: 2000 }, { class: '-step2b', duration: 2000 }, { class: '-step2c', duration: 3000 }, { class: '-step3a', duration: 1000 }, { class: '-step3b', duration: 1500 }, { class: '-step3c', duration: 5000 }];
      }
    };

    var section = document.querySelector('.how-it-works') || null;

    var isInViewport = function isInViewport(el) {
      var elemTop = el.getBoundingClientRect().top;
      var elemBottom = el.getBoundingClientRect().bottom;
      return elemTop < window.innerHeight && elemBottom >= 0;
    };

    var animationSteps = function animationSteps() {

      var smCloud = document.getElementsByClassName('cloud-small');
      var lgCloud = document.getElementsByClassName('cloud-large');
      var i = void 0;

      if (viewFlag) {
        if (smCloud[0].style.animation == "none" || lgCloud[0].style.animation == "none") {
          for (i = 0; i < smCloud.length; i++) {
            smCloud[i].removeAttribute("style");
          }
          for (i = 0; i < lgCloud.length; i++) {
            lgCloud[i].removeAttribute("style");
          }
        }

        section.removeClass(steps[index].class);
        if (index < steps.length - 1) {
          index++;
        } else {
          index = 0;
        }
        section.addClass(steps[index].class);

        if (!isTimerSet) return;

        window.clearInterval(timer);

        timer = setInterval(function () {
          animationSteps();
        }, steps[index].duration);
      } else {
        for (i = 0; i < smCloud.length; i++) {
          smCloud[i].style.animation = "none";
        }
        for (i = 0; i < lgCloud.length; i++) {
          lgCloud[i].style.animation = "none";
        }
      }
    };

    /**
      * Responsive SVG Viewbox
      **/
    var diagram = document.querySelector('.neighborhood-diagram');

    if (!section || !diagram) return;

    var resizeNeighborhoodDiagram = function resizeNeighborhoodDiagram() {
      if (window.screen.width < 600) {
        diagram.setAttribute('viewBox', '0 50 200 150');
      } else if (window.screen.width < 800) {
        diagram.setAttribute('viewBox', '-125 50 400 150');
      } else if (window.screen.width < 1000) {
        diagram.setAttribute('viewBox', '0 0 600 200');
      } else if (window.screen.width < 1200) {
        diagram.setAttribute('viewBox', '0 0 800 200');
      } else {
        diagram.setAttribute('viewBox', '0 0 1000 200');
      }
    };

    (0, _utils.throttle)('resize', 'optimizedResize');
    window.addEventListener('optimizedResize', function () {
      setSteps();
      resizeNeighborhoodDiagram();
    });
    window.addEventListener('scroll', function () {
      viewFlag = isInViewport(section);
    });

    if (!isTimerSet) {
      section.addEventListener('click', function () {
        animationSteps();
      });
    }

    /**
      * init
      **/
    setSteps();
    resizeNeighborhoodDiagram();

    if (isTimerSet) {
      timer = setInterval(function () {
        animationSteps();
      }, steps[index].duration);
    }
  })();

/***/ },
/* 2 */
/***/ function(module, exports) {

  "use strict";

  Object.defineProperty(exports, "__esModule", {
    value: true
  });
  var throttle = function throttle(type, name) {
    var obj = arguments.length <= 2 || arguments[2] === undefined ? window : arguments[2];

    var running = false;
    var func = function func() {
      if (running) return;
      running = true;
      requestAnimationFrame(function () {
        obj.dispatchEvent(new CustomEvent(name));
        running = false;
      });
    };
    obj.addEventListener(type, func);
  };

  exports.throttle = throttle;

/***/ },
/* 3 */
/***/ function(module, exports) {

  (function(){Array.prototype.CSSClassIndexOf=Array.prototype.indexOf||function(item){var length=this.length;for(var i=0;i<length;i++)if(this[i]===item)return i;return-1};var cl="classList"in document.createElement("a");var p=Element.prototype;if(!p.hasClass)p.hasClass=function(c){var r=true,e=cl?Array.prototype.slice.call(this.classList):this.className.split(" ");c=c.split(" ");for(var i=0;i<c.length;i++)if(cl){if(!this.classList.contains(c[i]))r=false}else if(e.CSSClassIndexOf(c[i])===-1)r=false;
  return r};if(!p.addClass)p.addClass=function(c){c=c.split(" ");for(var i=0;i<c.length;i++)if(!this.hasClass(c[i]))if(cl)this.classList.add(c[i]);else this.className=this.className!==""?this.className+" "+c[i]:c[i];return this};if(!p.removeClass)p.removeClass=function(c){var e=this.className.split(" ");c=c.split(" ");for(var i=0;i<c.length;i++)if(this.hasClass(c[i]))if(cl)this.classList.remove(c[i]);else e.splice(e.CSSClassIndexOf(c[i]),1);if(!cl)this.className=e.join(" ");return this};if(!p.toggleClass)p.toggleClass=
  function(c){c=c.split(" ");for(var i=0;i<c.length;i++)if(cl)this.classList.toggle(c[i]);else if(this.hasClass(c[i]))this.removeClass(c[i]);else this.addClass(c[i]);return this}})();

/***/ }
/******/ ]);
</script>