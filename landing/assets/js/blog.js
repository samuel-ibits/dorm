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
  const api_url = "https://api.dorm.com.ng/blogsfetch.php";

  async function getBlog() {
    // Making an API call (request)
    // and getting the response back
    const response = await fetch(api_url, {
      method: "GET", // *GET, POST, PUT, DELETE, etc.
      mode: "no-cors", // no-cors, *cors, same-origin
      cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
      headers: {
        "Content-Type": "application/json",
        // 'Content-Type': 'application/x-www-form-urlencoded',
      }
    });

    // Parsing it to JSON format
    const data = await response;
    //just for show
    console.log(data[0]);
    console.log(data.blog_text);
    console.log(data.response_code);
  }

  getBlog();
});
