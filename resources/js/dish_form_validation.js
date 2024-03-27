
const submitButton = document.getElementById('submit-button');
if (submitButton) {
  submitButton.addEventListener('click', event => {
    console.log("submit")

    const nameField = document.getElementById('name');
    const ingredientsField = document.getElementById('ingredients');
    const descriptionField = document.getElementById('description');
    const priceField = document.getElementById('price');

    const nameError = document.getElementById('nameError');
    const ingredientsError = document.getElementById('ingredientsError');
    const descriptionError = document.getElementById('descriptionError');
    const priceError = document.getElementById('priceError');

    let isValid = true;

    const dish = {
      name: nameField.value.trim(),
      ingredients: ingredientsField.value.trim(),
      description: descriptionField.value.trim(),
      price: priceField.value.trim(),

    }
    console.log(dish)

    // Reset previous errors
    nameError.innerText = '';
    ingredientsError.innerText = '';
    descriptionError.innerText = '';
    priceError.innerText = '';

    // Validate Name field
    if (dish.name === '') {
      nameError.innerText = 'Il nome è obbligatorio.';
      isValid = false;
    } else if (dish.name.length < 3) {
      nameError.innerText = 'Il nome deve avere almeno 3 caratteri.';
      isValid = false;
    } else if (dish.name.length > 50) {
      nameError.innerText = 'il nome deve avere meno di 50 caratteri.';
      isValid = false;
    }

    // Validate Ingredients field
    if (dish.ingredients.length > 150) {
      ingredientsError.innerText = 'Gli ingredienti devono avere meno di 150 caratteri.';
      isValid = false;
    }

    // Validate Description field
    if (dish.description.length > 250) {
      descriptionError.innerText = 'La descrizione deve avere meno di 250 caratteri.';
      isValid = false;
    }

    // Validate Price field
    if (dish.price === '') {
      priceError.innerText = 'Il prezzo è obbligatorio.';
      isValid = false;
    }

    if (!isValid) {
      event.preventDefault();
    }
  });
}