# hyperledger
... is a Blockchain (Hyperledger sawtooth) based land registration prototype.

## Installation

This project requires both [Docker](https://www.docker.com/) and
[Node/NPM](https://nodejs.org/). After installing, download this repo and run
the following commands to install dependencies for the transaction processor:

```bash
cd {project directory}/processor
npm install
```

And these commands to install dependencies for and build the client:

```bash
cd {project directory}/client
npm install
npm run build
```

## Running

### Sawtooth Components

Use the included docker compose file to spin up some default Sawtooth
components, including a validator and a REST API. Full instructions are
available in the
[Sawtooth Documentation](https://sawtooth.hyperledger.org/docs/core/releases/0.8/app_developers_guide/docker.html),
but all you really need to know is, from the project directory, run this
command to start Sawtooth up:

```bash
docker-compose up
```

And run this command to shut them down:

```bash
docker-compose down
```

Once running, you should be able to access the validator at
`tcp://localhost:4004` and the REST API at `http://localhost:8008`.

### Transaction Processor

In a new terminal window, start up the transaction processor:

```bash
cd {project directory}/processor
npm start
```

### Browser Client

Host the whole directory on a local apache server and open localhost/CHAINLAND in browser.

## Usage

### Create a User
Go to user/buyer login and there is 'new applicant?' option cilck on that for registering the new user.
Users are just public/private key-pairs stored in localStorage. Create one from
the _"Select User"_ dropdown. You can use this same dropdown to switch between
multiple users in localStorage.

### Create an Land Asset

Simple type in the name of your asset under _"Create Asset"_ and click the
create button. If you selected a user, you should see that asset appear in the
list at the bottom.

### Transfer an Land

Any asset you own can be transfered to another public key using the dropdowns
under _"Transfer Land"_. Note that the transfer must be accepted by that user
before it is finalized.

### Accept or Reject Transfers

Any pending transfers for the selected Admin will appear under _"Accept Asset"_.
These can be accepted (with an immediate change in ownership) or rejected with
the corresponding buttons.
