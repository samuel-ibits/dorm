Skip to content
Search...

Log in
Create account

84

16

203

Cover image for How to share anything from your website by Web Share API
Jatin Sharma
Jatin Sharma
Posted on Oct 29, 2021 • Updated on Nov 23, 2021

How to share anything from your website by Web Share API
#
javascript
#
webdev
#
beginners
#
tutorial
Web APIs (3 Part Series)
1
How to share anything from your website by Web Share API
2
How to use Web Storage API?
3
How to use Battery Status API?
In this article we are going to look at Web Share API. With the Web Share API, web apps are able to use the same system-provided share capabilities as platform-specific apps. The Web Share API makes it possible for web apps to share links, text, and files to other apps installed on the device in the same way as platform-specific apps.

Web share has the following capabilities and limitations:

It can only be used on a site that is accessed via HTTPS.
It must be invoked in response to a user action such as a click.
It can share, URLs, text, or files.
Sharing links and text
To share links and text, use the share() method, which is a promise-based method with a required properties object. To keep the browser from throwing a TypeError, the object must contain at least one of the following properties: title, text, url or files
// check for support of web share API
if (navigator.share) {
  navigator
    .share({
      title: "This is header/title",
      text: "This is the description",
      url: "https://put-here-url.com",
    })
    .then(() => console.log("Successful share"))
    .catch((error) => console.log("Error sharing", error));
} else {
  console.error("Browser doesn't support Web Share API");
}
You can use this in your function or anywhere you want. But before you do that you should remember one thing that it does not support by old version browsers.

So you need to make sure that you handle that case. For example the above code will console the error if it doesn't support the Web Share API but it's my preference that you should only show the share button if browser supports it, otherwise hide the button.

Here is the example code what i was saying
const btn = document.getElementById("btn");

// function for web share api
function webShareAPI(header, description, link) {
  navigator
    .share({
      title: header,
      text: description,
      url: link,
    })
    .then(() => console.log("Successful share"))
    .catch((error) => console.log("Error sharing", error));
}

if (navigator.share) {
  // Show button if it supports webShareAPI
  btn.style.display = "block";
  btn.addEventListener("click", () =>
    webShareAPI("header", "description", "www.url.com")
  );
} else {
  // Hide button if it doesn't supports webShareAPI
  btn.style.display = "none";
  console.error("Your Browser doesn't support Web Share API");
}
Try it on Codepen

Conclusion
Now you can use this API for your personal projects or wherever you want. you can do much more than that you can take the custom input or maybe you want to share you blog then you can use this. If you learned something new then 👍, and consider to follow.

You can now extend your support by buying me a Coffee.😊👇

Buy Me A Coffee

Also Read
10 CSS Resources that you should bookmark
Some Javascript Methods you should know
CSS Gradient Loading Animation
Web APIs (3 Part Series)
1
How to share anything from your website by Web Share API
2
How to use Web Storage API?
3
How to use Battery Status API?
Discussion (8)
Subscribe
pic
Add to the discussion
 
sapinder_dev profile image
Sapinder Singh
•
Oct 29 '21

In the browsers that don’t support it, you can handle this case by manually copying the link via clipboard api when the user clicks on it.


9
 likes
Reply
 
j471n profile image
Jatin Sharma 
•
Oct 29 '21

Yeh that's a nice suggestion, thanks for your opinion :)


1
 like
Reply
 
marvinbrouwer profile image
Marvin Brouwer
•
Oct 29 '21

I personally like the scenario where you show a link with an onClick event that prevents browsing so a user can hold(or right click) to get the native share dialog if they desire. And then put a share button next to that with a fallback to the clipboard API.
I whipped up a quick example:
codesandbox.io/s/suspicious-rosali...
It's full of flaws and not really visually pleasing but this is kind of what I meant.


Like
Thread
sapinder_dev profile image
Sapinder Singh
•
Oct 29 '21

Check out how I implemented the share thing in my blog- blog.sapinder.dev


4
 likes
Reply
 
iacons profile image
Iacovos Constantinou
•
Oct 29 '21

Nice post @j471n !

As you have mentioned, Web Share API is not supported in old browser versions. In general, there is a good support for mobile devices. However, there is partial support for desktop devices. For instance, Chrome has support only for Windows and Chrome OS. Firefox has no support at all.

Further details can be found here caniuse.com/web-share


2
 likes
Reply
 
j471n profile image
Jatin Sharma 
•
Oct 29 '21

Yeh that's totally right, that's for sharing your views :)


2
 likes
Reply
 
palalet profile image
RadekHavelka
•
Nov 6 '21

one quick note - on windows / chrome it only offers the apps you have downloaded via Store, so you cannot share to facebook and others because the system doesn't "know them". This is very nice solution, thanks for sharing, but be aware of this gotchas.


1
 like
Reply
 
j471n profile image
Jatin Sharma 
•
Nov 6 '21

Yeh I will make a seperate post for that, in which you can share the article or anything on famous social media platforms and integrated with web share API as well.


2
 likes
Reply
Code of Conduct • Report abuse
Read next
imshivanshpatel profile image
Good Bye console.log,no console.log in 2022
SHIVANSH PATEL - Dec 31 '21

snehalk profile image
What is Composition API in Vue 3
Snehal - Dec 23 '21

dailydevtips1 profile image
How I spend my 19% free time
Chris Bongers - Jan 1

wolfmath profile image
Drag and Drop with React (with no libraries) part 2
Aaron Wolf - Dec 30 '21


Jatin Sharma
Follow
React developer | Python Developer
LOCATION
India
JOINED
Oct 20, 2020
More from Jatin Sharma
Image Slider with Vanila JS
#javascript #css #webdev #tutorial
Colorful Rain with JS
#css #webdev #javascript #tutorial
Why I ditched ​chrome for Edge?
#webdev #javascript #productivity #beginners
const btn = document.getElementById("btn");

// function for web share api
function webShareAPI(header, description, link) {
  navigator
    .share({
      title: header,
      text: description,
      url: link,
    })
    .then(() => console.log("Successful share"))
    .catch((error) => console.log("Error sharing", error));
}

if (navigator.share) {
  // Show button if it supports webShareAPI
  btn.style.display = "block";
  btn.addEventListener("click", () =>
    webShareAPI("header", "description", "www.url.com")
  );
} else {
  // Hide button if it doesn't supports webShareAPI
  btn.style.display = "none";
  console.error("Your Browser doesn't support Web Share API");
}
DEV Community — A constructive and inclusive social network for software developers. With you every step of your journey.

Built on Forem — the open source software that powers DEV and other inclusive communities.

Made with love and Ruby on Rails. DEV Community © 2016 - 2022.