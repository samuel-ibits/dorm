window.addEventListener("load", function () {
  // const request = new XMLHttpRequest();
  // request.open("GET", "https://api.dorm.com.ng/blogsfetch.php");
  // request.setRequestHeader("Content-Type", "application/json");
  // request.send();
  // request.onload = () => {
  //   if (request.status == 200) {
  //     console.log(JASON.parse(request.response));
  //   } else {
  //     console.log(request.status);
  //   }
  // };

  // fetch("https://api.dorm.com.ng/blogsfetch.php")
  //   .then((response) => {
  //     return response.json;
  //   })
  //   .then((json) => {
  //     console.log(json);
  //   });

  async function getBlog() {
    let response = await fetch("https://api.dorm.com.ng/blogsfetch.php", {
      method: "GET",
      mode: "cors",
      cache: "no-cache",
      credentials: "same-origin",
      headers: {
        "Content-Type": "application/json",
      },
    });
    let blogData = await response.json;
    console.log(blogData);
  }

  getBlog();
});
