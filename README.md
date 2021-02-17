# Smartlist (Desktop)
## A PHP and SQL project by ManuTheCoder
#### This Repository is part of a larger project at: https://smartlist.ga
![CB](https://img.shields.io/badge/Contributors-20-yellow?style=for-the-badge)
![Frontend](https://img.shields.io/static/v1?label=Frontend&message=HTML,%20CSS,%20JS&color=%3CCOLOR%3E&style=for-the-badge)
![Backend](https://img.shields.io/static/v1?label=Backend&message=PHP,%20SQL&color=red&style=for-the-badge)
![CONTRIBUTE](https://img.shields.io/static/v1?label=Contribute&message=Using%20Smartlist%20Contributors&color=blue&style=for-the-badge)
[![Build Status](https://img.shields.io/github/forks/ManuTheCoder/Smartlist-desktop.svg?style=for-the-badge)](https://github.com/ManuTheCoder/Smartlist-desktop)
[![Build Status](https://img.shields.io/github/stars/ManuTheCoder/Smartlist-desktop.svg?style=for-the-badge)](https://github.com/ManuTheCoder/Smartlist-desktop)
[![License](https://img.shields.io/github/license/ManuTheCoder/Smartlist-desktop.svg?style=for-the-badge)](https://github.com/ManuTheCoder/Smartlist-desktop)
[![Gitter](https://img.shields.io/badge/Chat-On%20Gitter-teal?style=for-the-badge)](https://gitter.im/Smartlist-chat/community?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)
<!--[![Build Status](https://img.shields.io/github/forks/ManuTheCoder/Smartlist-desktop.svg)](https://github.com/ManuTheCoder/Smartlist-desktop)
[![Build Status](https://img.shields.io/github/stars/ManuTheCoder/Smartlist-desktop.svg)](https://github.com/ManuTheCoder/Smartlist-desktop)
[![License](https://img.shields.io/github/license/ManuTheCoder/Smartlist-desktop.svg)](https://github.com/ManuTheCoder/Smartlist-desktop)-->

---
Meet Smartlist.
Smartlist is a home inventory app which lets you keep track of what you have, wherever you are - for free!
* Encrypted items & databases - We implement a security system which prevents hackers from gaining access to your items.
* View offline, and on any device - You can access your inventory anywhere, anytime, even without a proper connection
* Minimalistic dashboard - We keep a simple dashboard, so you don't get overwhelmed at the sight of it!

Quick links: <br>
Home: https://smartlist.ga <br>
Dashboard: https://smartlist.ga/dashboard/beta<br>
Forum: https://community.smartlist.ga<br>
Knowledge Base: https://knowledgebase.smartlist.ga/<br>

--- 
### How can I get involved? 
We appreciate visitors! Getting involved isn't mandatory, but we really enjoy it!<br>
**We do not accept money, as per our home page, Smartlist is free forever to everyone. Please consider other ways of getting involved**
Ways you can help: 
* Contribute to our forum! We really appreciate it when others ask questions!
* Give us code 
* Fix any bugs
* *Come up with new ideas* - New ideas are always welcome and widely appreciated. An idea is good enough to earn you the gold rank!
* Signing up for an account
* Reporting new bugs
--- 
### Credits 
The development process of this project is going really well thanks to these people! Without them, the very exsistence of this project wouldn't be there!

| Diamond Sponsors      | Gold Sponsors           | Others                               |
|-----------------------|-------------------------|--------------------------------------|
| Manusvath Gurudath    | jQuery                  | No one here yet!                     |
| Pramodini Ravishankar | Materialize CSS & team! | @Pictagar from InfintyFree forums    |
| Achinthya Kashyap     | Codepen                 | @Lovebug from Infinityfree forums    |
| Sriram Vijayendra     | Drag Select JS          | @FatGrizzly from Infinityfree forums |
| Img BB                | postale.io              | @BayoDino from Infinityfree forums   |
| InfinityFree          |                         | @Admin from Infinityfree forums      |
| Infinitzhost          |                         | @OxyDac from Infinityfree forums     |
#### How do I become a sponsor? 
1. Go to https://smartlist.ga/contribute/ 
2. Log in with your smartlist account
3. Click on the "Award" icon - Here you can see how many minutes you have voluntered and how many others have!
4. If you want to add yourself to the sponsor list, go to the info icon in the sidebar, and click "add myself to credits"
5. Please be truthful, and only add yourself if you have done something. **Spamming is strictly forbidden** 
6. You can join our slack here: https://join.slack.com/t/smartlist-dev-app/shared_invite/zt-mqmeozg0-DvV2FG0lCRsTZgGcvpcvpA

## How to use the API
The data is recieved via a GET request, and only the username will be provided for security reasons. Use this API respectfully!
1. Create an account at: https://smartlist.ga/contribute/ or log in with your smartlist account
2. Create an API key
3. Insert this code into your application: 
```
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<form method="POST">
    <?php if(!isset($_GET['success'])){?>
    <img src="https://img.flaticon.com/icons/png/512/295/295128.png?size=1200x630f&pad=10,10,10,10&ext=png&bg=FFFFFFFF" width="50%" style="display:block;margin: auto">
    <h2>Simple login form using Smartlist API</h2>
    <p>Here, we show you how an example of using the Smartlist API. Image by flaticon</p>
    <input type="text" placeholder="Username">
    <input type="text" placeholder="Password">
    <button type="submit" disabled>Log in</button>
    <a href="https://smartlist.ga/auth?key=YOUR_API_KEY_GOES_HERE_IN_THIS_SPOT_LOOK_HERE">Log in with Smartlist</button>
    <?php } else {?>
        <div style="background: #34eb64;color:white;padding: 10px;border-radius: 5px">Successfully Signed In!<br>
        Data Collected: <br>
        Username: <?php echo $_GET['username'];?></div>
    <?php }?>
</form>

```

---
### License
> MIT License
> 
> Copyright (c) 2021 Manusvath Gurudath
> 
> Permission is hereby granted, free of charge, to any person obtaining a copy
> of this software and associated documentation files (the "Software"), to deal
> in the Software without restriction, including without limitation the rights
> to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
> copies of the Software, and to permit persons to whom the Software is
> furnished to do so, subject to the following conditions:
> 
> The above copyright notice and this permission notice shall be included in all
> copies or substantial portions of the Software.
> 
> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
> IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
> FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
> AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
> LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
> OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
> SOFTWARE.
