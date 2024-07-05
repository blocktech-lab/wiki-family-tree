# WikiFamilyTree

- Contributors: blocktech-lab
- Tags: family, wiki
- Tested up to: 6.4

Family History Wiki for WordPress

## Description

Transform your WordPress installation into a powerful wiki tailored for preserving and sharing your family history.

### Recommended Setup

Navigate to wp-admin → *Settings* → *Reading* and set a static homepage. The plugin also includes an option to make your site private, visible only to selected users, which is ideal for limiting edits to registered users.

Create new users with roles such as *Wiki User* (can edit pages) or *Wiki Editor* (can delete pages). Note that users with roles *Editor* or *Administrator* are also capable of editing pages.

If you've created a calendar page, specify `family_wiki_calendar_page` using the CLI command `wp option add family_wiki_calendar_page /Calendar`. This allows dates to link directly to that page.

### Advanced Custom Fields

The plugin utilizes Advanced Custom Fields (version 6.2 or higher) for managing wiki page metadata. Installation of this plugin is necessary, and provided JSON files in the `acf-json/` directory will automatically restore necessary fields.

Each wiki page can include details like birth and death dates, as well as relationships such as mother, father, and children. This data enhances the calendar page and enables automatic generation of short bios using the `[name_with_bio]` shortcode, typically placed at the beginning of a wiki page.

### Gutenberg Blocks

- **Family Calendar Block:** Displays all dates from the wiki.
- **Birthday Calendar Block:** Shows dates of living individuals (determined by `showage` settings) from the wiki.