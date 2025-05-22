# Git Cheat-Sheet

## Repository Mangement

<table border="1">
  <tr>
    <th>Command</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>git init</td>
    <td>Initialize a new Git repository</td>
  </tr>
  <tr>
    <td>git clone &lt;url&gt;</td>
    <td>Clone a remote repository</td>
  </tr>
  <tr>
    <td>git status</td>
    <td>Show the working tree status</td>
  </tr>
  <tr>
    <td>git add .</td>
    <td>Add all the files and folders inside current folder to the staging area</td>
  </tr>
  <tr>
    <td>git add &lt;folder&gt;</td>
    <td>Add all the files and folders inside the sepcified folder to the staging area</td>
  </tr>
  <tr>
    <td>git commit &lt;message&gt;</td>
    <td>Commit changes to the repository</td>
  </tr>
  <tr>
    <td>git restore .</td>
    <td>Discard all the unstaged changes.</td>
  </tr>
  <tr>
    <td>git restore &lt;folder&gt;</td>
    <td>Discard all the unstaged changes inside the specified folder.</td>
  </tr>
  <tr>
    <td>git restore &lt;folder&gt;</td>
    <td>Discard the unstaged changes in the specified file.</td>
  </tr>
  <tr>
    <td>git restore --staged .</td>
    <td>Restore the uncommited staged files to unstage.</td>
  </tr>
  <tr>
    <td>git restore --staged &lt;file&gt;</td>
    <td>Restore the specified uncommited staged file to unstage.</td>
  </tr>
  <tr>
    <td>git restore --staged &lt;folder&gt;</td>
    <td>Restore the uncommited staged files of specified folder to unstage.</td>
  </tr>
  <tr>
    <td>git stash</td>
    <td>Stash changes in the working directory</td>
  </tr>
  </tr>
  <tr>
    <td>git stash list</td>
    <td>See all stashes</td>
  </tr>
  <tr>
    <td>git stash pop</td>
    <td>Apply most recent stashed changes to the working directory</td>
  </tr>
  <tr>
    <td>git stash pop stash@{STASH_NO}</td>
    <td>Apply STAHSH_NO stash stashed changes to the working directory</td>
  </tr>
  </tr>
  <tr>
    <td>git pull</td>
    <td>Pull changes from the remote repository</td>
  </tr>
  </tr>
  <tr>
    <td>git push</td>
    <td>Push changes to the remote repository</td>
  </tr>
  </tr>
  <tr>
    <td>git fetch</td>
    <td>Fetch changes from the remote repository</td>
  </tr>
  </tr>
  <tr>
    <td>git merge &lt;branch&gt;</td>
    <td>Merge a branch into the current branch</td>
  </tr>
  <tr>
    <td>git branch</td>
    <td>List all branches</td>
  </tr>
  <tr>
    <td>git branch &lt;branch&gt;</td>
    <td>Create a new branch</td>
  </tr>
  </tr>
  <tr>
    <td>git checkout &lt;branch&gt;</td>
    <td>Switch to a branch</td>
  </tr>
  </tr>
  <tr>
    <td>git checkout -b &lt;branch&gt;</td>
    <td>Create and switch to a new branch</td>
  </tr>
  </tr>
  <tr>
    <td>git branch -d &lt;branch&gt;</td>
    <td>Delete a branch</td>
  </tr>
  </tr>
  <tr>
    <td>git log</td>
    <td>Show commit logs</td>
  </tr>
  <tr>
    <td>git log --oneline</td>
    <td>Show commit logs in one line per commit (short commit ID, commit Message)</td>
  </tr>
  </tr>
  <tr>
    <td>git diff</td>
    <td>Show changes between commits of all the files</td>
  </tr>
  <tr>
    <td>git diff &lt;folder&gt;</td>
    <td>Show changes between commits of all the files inside folder</td>
  </tr>
  <tr>
    <td>git diff &lt;file&gt;</td>
    <td>Show changes between commits of the specified file</td>
  </tr>
  <tr>
    <td>git blame &lt;file&gt;</td>
    <td>Show who changed each line in a file</td>
  </tr>
  <tr>
    <td>git revert &lt;COMMIT_HASH&gt;</td>
    <td>Removes the changes of the specific commit and adds another commit of that removal of change. It doesn't make any changes to its previous and after commits</td>
  </tr>
  <tr>
    <td>git reset &lt;COMMIT_HASH&gt;</td>
    <td>Untracks all the changes after that specific commit. Means goes back to that commit. It untracks all the changes but doesn't remove all the changes of that commit.</td>
  </tr>
</table>
