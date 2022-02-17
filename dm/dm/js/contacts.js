if ("contacts" in navigator && 
    "select" in navigator.contacts && 
    "getProperties" in navigator.contacts) {
 try {
   const availableProperties = await navigator.contacts.getProperties();
     
     if (availableProperties.includes("address")) {
       const contactProperties = ['name', 'tel', 'address'];
   
       const contacts = await navigator
        .contacts
        .select(
         contactProperties,
         {multiple: true}
        );
   
       console.log("Your first contact: " + contacts[0].name + " " + contacts[0].tel + " " + contacts[0].address);
     } else {
       console.log("Contact Picker API on your device doesn't support address property");
     }
 } catch () {
   console.log("Unexpected error happened in Contact Picker API");
 }
} else {
 console.log("Your browser doesn't support Contact Picker API");
}