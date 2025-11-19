---
layout: default
title: torieclark.com
---

<div class="blurb">
Writing about music, the humanities, hobbies, and lifestyles.
</div>


  {% for post in site.posts %}
<div>
      <h1><a href="{{ post.url }}">{{ post.title }}</a></h1>
        {{ post.date | date_to_string }}
      {{ post.excerpt }}
</div>
<a href="{{ post.url }}">continue reading...</a>
  {% endfor %}
