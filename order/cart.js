


// Select increment and decrement buttons
const incrementCount = document.querySelector(".plus");
const decrementCount = document.querySelector(".minus");
const incrementCount2 = document.querySelector(".plus2");
const decrementCount2 = document.querySelector(".minus2");

// Select total count
const totalCount = document.getElementById("item1");
const totalCount2 = document.getElementById("item2");

// Variable to track count
var count = 1;

// Display initial count value
totalCount.innerHTML = count;

// Function to increment count
const handleIncrement = () => {
  count++;
  totalCount.innerHTML = count;
  console.log(count);
};

// Function to increment count
const handleIncrement2 = () => {
  count++;
  totalCount2.innerHTML = count;
  console.log(count);
};


// Function to decrement count
const handleDecrement = () => {
    if (count > 0) {
      count--;
      totalCount.innerHTML = count;
    }
  };
  
  // Function to decrement count
  const handleDecrement2 = () => {
    if (count > 0) {
      count--;
      totalCount2.innerHTML = count;
    }
  };
  
// Add click event to buttons
incrementCount.addEventListener("click", handleIncrement);
decrementCount.addEventListener("click", handleDecrement);
incrementCount2.addEventListener("click", handleIncrement2);
decrementCount2.addEventListener("click", handleDecrement2);