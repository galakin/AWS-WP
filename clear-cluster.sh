TASK=$(aws ecs list-tasks --cluster deploy-cluster)
TASK=$(echo $TASK | sed 's/.*task\///')
TASK=$(echo $TASK | sed 's/.[[:blank:]].*//')
if [ -z "$TASK" ] then
    aws ecs stop-task --task $TASK --cluste deploy-cluster
else printf 'No Task find in container'
fi 
