import LatestPosts from "../components/latest-posts";

type Params = Promise<{ slug: string }>;
type SearchParams = Promise<{ [key: string]: string | string[] | undefined }>;

export default async function Page(props: {
  params: Params;
  searchParams: SearchParams;
}) {
  const searchParams = await props.searchParams;

  return (
    <section>
      <LatestPosts />
    </section>
  );
}
