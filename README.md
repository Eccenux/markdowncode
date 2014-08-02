markdowncode
============

This is a simple Drupal 7 filter that allows using Github style for adding code blocks.

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
5. Add this Geshi filter below (if you haven't already).
6. Save the format and enjoy :-).

If you are using Markdown extension then rember to add it below. So the correct order is:
1. Github-style Markdown code blocks filter (this filter).
2. Geshi filter.
3. Markdown filter.