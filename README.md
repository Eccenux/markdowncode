MarkdownCode
============

This is a simple Drupal 7 filter that allows using fenced code blocks with language name. Just as you can in Github-style Markdown.

As a bouns you can use 4-space code blocks. This is done after fenced code blocks so you can provide examples of fenced code blocks in 4-space code blocks ;-). In case its not obvious - 4-space code blocks consists of lines that start with 4 spaces.

Example
----------

    ```css
    .some-class {
      background: yellow;
    }
    ```

Installation
----------------
1. Copy `markdowncode` folder to your `sites/all/modules`.
2. Enable this module as always (in a module configuration of your site).
3. Edit or add new content format.
4. Add this filter.
5. Add GeSHi filter below (if you haven't already).
6. Save the format and enjoy :-).


If you are using Markdown extension then rember to add it below. The correct order of filters is:

1. Github-style Markdown code blocks filter (this filter).
2. GeSHi filter ([project page](https://drupal.org/project/geshifilter)).
3. Markdown filter ([project page](https://drupal.org/project/markdown)).
