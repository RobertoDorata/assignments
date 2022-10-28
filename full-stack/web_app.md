# Full Stack Engineer Assignment

## Context description

Sometimes people needs to do a specific medical exam that most health structures are not supporting, so they need to find one such structure.

The job is to create a web application that allows – in a simplified way – a community-driven effort for:

- adding new structures to the catalog, with the exams they provide
- locating those structures based on the needed exam

## Details

- Each **structure** is characterized by a name, a geographic region, a city and a phone number.
- Due to the free nature of the website, a structure may pay in order to be advertised and placed among the top search results, when relevant.
- Each **exam** is described just by its name, which may be composed of several words; the user must be able to perform the search just by providing even one of those words.
- Search results:
  - must be sorted by region, city and exam name
  - if there are advertised structures among them, they must be placed in the top positions for the given region and highlighted with a different color
  - If there are no results, an explanatory message must be shown to the user.

## Technical requirements

1. Keep track of the work with a Git repository.
2. Design the database schema and provide the migrations needed.
3. Manage the entities as RESTful resources, providing CRUD HTTP APIs that use the `JSON` format.
4. Implement (at least) the web page for the search of the medical structures.

### Nice to have

1. **A self-contained docker deployment of the application components.**

   Project repository should have a similar structure to the following one

   ```
   assignment
   ├── api
   ├── [frontend]
   ├── [api-spec]
   ├── ...
   ├── docker-compose.yml
   └── README.md # documentation to bootstrap and test the project
   ```

2. For backend development the use of PHP and the Laravel framework is **strongly recommended**, but other technologies are accepted.
3. Providing validation of the user’s inputs.
4. Web pages for structures and exams managent (CRUD APIs interaction)
5. Logging of the user’s activity, e.g.:

   `<DATE> <TIME>: <IP_ADDRESS> added structure <STRUCTURE_ID>`

6. Unit tests.
7. A well structured commit history (a commit for each independent unit of code).
8. Paginated search results.
9. A responsive (mobile-friendly) web page, with the help of some css framework, e.g. bootstrap.
10. Developement of the frontend as an independent component, leveraging one of the most known modern frameworks.

### Don't mind

1. Performance
2. Authentication / Authorization / Auditing
3. Appearance details

## Tips

- _If you don't feel comfortable at all with frontend developement provide a Swagger deployment or at least a Postman collection to enable API testing_.
- A SQLite database it’s enough.
- Do not lose time in feeding the database: use simple names such as "S1", "S2", etc for structures and "E1 A B C", "E2 L M N", etc for exams.
- In feeding the database, consider using a migration for some pre-existing records.
- If you need it, feel free to leverage whatever extra framework/library, but its installation and use must be documented. Minimal dependency on external code is better.
- Evaluation criteria (in decreasing importance level)
  - Ability to assess a generic task and provide a solution that meets the minimum requirements.
  - Programming skills.
  - Well structured and clean self explanatory code.
  - Technologies knowledge
    - PHP
    - Database and SQL
    - Git
    - HTML, CSS and JS
    - Docker
    - Optional frontend framework

## Contacts and submission

If you think something is not clear enough to proceed feel free to open an issue on this repository.

For submission mail to the [devs](mailto:marco@dverso.studio,damiano@dverso.studio) the link to your git repository.
