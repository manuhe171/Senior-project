<div class="news-container">
  <div class="news-article">
    <h2>Breaking News</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt purus vel massa bibendum, id fermentum lacus venenatis. Duis auctor quam vitae magna tristique, nec pulvinar augue dictum. Donec blandit felis vel orci bibendum, et aliquam urna porttitor. Ut lacinia sagittis elit, at dapibus leo varius nec. </p>
  </div>
  <div class="news-article">
    <h2>Sports News</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt purus vel massa bibendum, id fermentum lacus venenatis. Duis auctor quam vitae magna tristique, nec pulvinar augue dictum. Donec blandit felis vel orci bibendum, et aliquam urna porttitor. Ut lacinia sagittis elit, at dapibus leo varius nec. </p>
  </div>
  <div class="news-article">
    <h2>Entertainment News</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt purus vel massa bibendum, id fermentum lacus venenatis. Duis auctor quam vitae magna tristique, nec pulvinar augue dictum. Donec blandit felis vel orci bibendum, et aliquam urna porttitor. Ut lacinia sagittis elit, at dapibus leo varius nec. </p>
  </div>
</div>

<script>
    // Get news container element
const newsContainer = document.querySelector('.news-container');

// Loop through news articles and create HTML elements
const articles = newsContainer.querySelectorAll('.news-article');
articles.forEach(article => {
  // Get article title and content
  const title = article.querySelector('h2').textContent;
  const content = article.querySelector('p').textContent;
  
  // Create HTML elements for news article
  const articleElem = document.createElement('div');
  articleElem.classList.add('news-article');
  articleElem.innerHTML = `
    <h2>${title}</h2>
    <p>${content}</p>
  `;
  
  // Append article element to news container
  newsContainer.appendChild(articleElem);
  
  // Remove original article element
  article.remove();
});
</script>