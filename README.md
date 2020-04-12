# Copyright year formatter addon for statamic v2

[![Statamic 2](https://img.shields.io/badge/Statamic-2.10-orange.svg)](https://statamic.com)

## Installation
Copy addon's source code to project's `site/addons/CopyrightYear` directory.

## Usage
Use `{{ copyright_year }}` tag anywhere in your templates, typically in page footer.

Example:
```
 <p>&copy; {{ copyright_year }} <a href="{{ site_url }}">{{ site_name }}</a>. All rights reserved.</p>
```

If copyright year is current year, this year is basically displayed. If copyright year is in the past, year range is displayed.

### Sample output 1
Current year is 2020. Copyright year is set to 2020. Output: `2020`

### Sample output 2
Current year is 2020. Copyright year is set to 2019. Output: `2019-2020`
