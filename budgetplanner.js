// Get elements from HTML
const list = document.getElementById("list");
const budgetTotal = document.getElementById("budget-total");
const expenseAmount = document.getElementById("expense-amount");
const submitExpenseButton = document.getElementById("submit-expense");
const expenseTitle = document.getElementById("expense-title");
const errorMessage = document.getElementById("error-budget");
const productTitleError = document.getElementById("product-title-error");
const productCostError = document.getElementById("product-cost-error");
const balanceValue = document.getElementById("balance-amount");
const amount = document.getElementById("amount");
const expenditureValue = document.getElementById("expenditure-value");
const budgetTotalButton = document.getElementById("budget-total-button");

// Set initial variables
let tempAmount = 0;

// Event listener for setting the budget
budgetTotalButton.addEventListener("click", () => {
  // Get user input for budget
  tempAmount = budgetTotal.value;

  // Show error message if input is empty or negative
  if (tempAmount === "" || tempAmount < 0) {
    errorMessage.classList.remove("hide");
  } else {
    // Hide error message and set the budget
    errorMessage.classList.add("hide");
    amount.innerHTML = tempAmount;

    // Set balance based on budget and total expenditure
    balanceValue.innerText = tempAmount - expenditureValue.innerText;

    // Clear input box
    budgetTotal.value = "";
  }
});

// Function to disable edit and delete buttons
const disableButtons = (bool) => {
  let editButtons = document.getElementsByClassName("edit");
  Array.from(editButtons).forEach((element) => {
    element.disabled = bool;
  });
};

// Function to modify an expense item
const modifyElement = (element, edit = false) => {
  // Get the expense item and its details
  let parentDiv = element.parentElement;
  let currentBalance = balanceValue.innerText;
  let currentExpense = expenditureValue.innerText;
  let parentAmount = parentDiv.querySelector(".amount").innerText;

  // If editing, pre-fill the input fields and disable edit and delete buttons
  if (edit) {
    let parentText = parentDiv.querySelector(".product").innerText;
    expenseTitle.value = parentText;
    expenseAmount.value = parentAmount;
    disableButtons(true);
  }

  // Update balance and total expenditure, and remove the expense item
  balanceValue.innerText = parseInt(currentBalance) + parseInt(parentAmount);
  expenditureValue.innerText =
    parseInt(currentExpense) - parseInt(parentAmount);
  parentDiv.remove();
};

// Function to create a new expense item and add it to the list
const listCreator = (expenseName, expenseValue) => {
  // Create a new div for the expense item
  let sublistContent = document.createElement("div");
  sublistContent.classList.add("sublist-content", "flex-space");
  list.appendChild(sublistContent);

  // Add the name and value of the expense item
  sublistContent.innerHTML = `<p class="product">${expenseName}</p><p class="amount">${expenseValue}</p>`;

  // Add edit and delete buttons to the expense item
  let editButton = document.createElement("button");
  editButton.classList.add("fa-solid", "fa-pen-to-square", "edit");
  editButton.style.fontSize = "1.2em";
  editButton.addEventListener("click", () => {
    modifyElement(editButton, true);
  });

  let deleteButton = document.createElement("button");
  deleteButton.classList.add("fa-solid", "fa-trash-can", "delete");
  deleteButton.style.fontSize = "1.2em";
  deleteButton.addEventListener("click", () => {
    modifyElement(deleteButton);
  });
  sublistContent.appendChild(editButton);
  sublistContent.appendChild(deleteButton);
  document.getElementById("list").appendChild(sublistContent);

  //This is the AJAX request so we can insert the data into the budgetplanner database
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "insertbudgetplanner.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };
  xhr.send(`expenseName=${expenseName}&expenseValue=${expenseValue}`);
};

//Function To Add Expenses
submitExpenseButton.addEventListener("click", () => {
  //empty checks
  if (!expenseAmount.value || !expenseTitle.value) {
    productTitleError.classList.remove("hide");
    return false;
  }
  //Enable buttons
  disableButtons(false);
  //Expense
  let expenditure = parseInt(expenseAmount.value);
  //Total expense (existing + new)
  let sum = parseInt(expenditureValue.innerText) + expenditure;
  expenditureValue.innerText = sum;
  //Total balance(budget - total expense)
  const totalBalance = tempAmount - sum;
  balanceValue.innerText = totalBalance;
  //Create list
  listCreator(expenseTitle.value, expenseAmount.value);
  //Empty inputs
  expenseTitle.value = "";
  expenseAmount.value = "";
});